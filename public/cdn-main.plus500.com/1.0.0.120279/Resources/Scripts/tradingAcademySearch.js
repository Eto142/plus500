function initSearch(options){
    return new Vue ({
        el: options.rootElement,
        data: {
            searchTerm: '',
            isOpen: false,
            isLoading: false,
            results: [],
            selected: null
        } ,
        watch: {
            searchTerm: debounce(function(value) {
                var self = this
                if(self.isLoading){
                    return
                }
                
                var isLimitReached = value.length > options.searchTermLimit;
                if (isLimitReached){
                    self.isLoading = true
                    $.ajax({
                        url: options.apiUrl + '?term=' + value + '&callingPage=' + options.page ,
                        type: "GET",
                    }).promise().then(function(response) {
                        self.isOpen = true
                        self.results = response.results || []
                        self.isLoading = false;
                    }, function(reject){
                        console.log(reject.responseJSON.Message)
                        self.isOpen = false;
                        self.results = []
                        self.isLoading = false;
                    });
                } else {
                    self.isOpen = false;
                    self.results = []
                }
            }, 300)
        },
        methods: {
            isEmptyResults: function(){
                return this.results.length === 0 && this.searchTerm.length > options.searchTermLimit
            },
            groupResultsByCategory: function (results) {
                var groupedResults = results.reduce(function (r, a) {
                    r[a.category] = r[a.category] || [];
                    r[a.category].push(a);
                    return r;
                }, Object.create(null));
                Object.keys(groupedResults, function (k) {
                    groupedResults[k] = groupedResults[k].sort(function (x) {
                        x.order
                    })
                })
                return groupedResults
            },
            toCategoryName: function(categoryId){
                return options.categoriesNames[categoryId - 1];
            }
        }
    });
}

function debounce (fn, delay) {
    var timeoutID = null
    return function () {
        clearTimeout(timeoutID)
        var args = arguments
        var that = this
        timeoutID = setTimeout(function () {
            fn.apply(that, args)
        }, delay)
    }
}