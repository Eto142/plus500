@include('admin.header')
<div class="main-panel bg-dark">
    <div class="content bg-dark">
        <div class="page-inner">
            @if(session('message'))
            <div class="alert alert-success mb-2">{{session('message')}}</div>
            @endif
            <div class="mt-2 mb-4">
                <h1 class="title1 d-inline text-light">Update Payment method</h1>
                <div class="d-inline">
                    <div class="float-right btn-group">
                        {{-- <a class="btn btn-primary btn-sm" href="{{route('payment.settings')}}"> <i
                                class="fa fa-arrow-left"></i> back</a> --}}
                    </div>
                </div>
            </div>
            <div>
            </div>
            <div>
            </div>
            <div class="mb-5 row">
                <div class="col-md-8 offset-md-2">
                    <form method="POST" action="{{ route('cryptos.update', $crypto->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <h6 class="text-light">Name</h6>
                                <input type="text" class="form-control bg-dark text-light" name="name"
                                       placeholder="Payment method name" value="{{ $crypto->name }}">
                            </div>
                    
                            <div class="form-group col-md-12">
                                <h6 class="text-light">Address</h6>
                                <input type="text" class="form-control bg-dark text-light" name="address"
                                       placeholder="Wallet Address" value="{{ $crypto->address }}">
                            </div>
                    
                            <div class="form-group col-md-12">
                                <button type="submit" class="px-4 btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <script>
        let methodtype = document.getElementById('methodtype');
    let currtype = document.querySelectorAll('.currency');
    let currinput = document.querySelectorAll('.currinput');
    let cryptotype = document.querySelectorAll('.crypto');
    let cryptoinput = document.querySelectorAll('.cryptoinput');
    
    currinput[0].setAttribute('required','');
    currinput[1].setAttribute('required','');
    currinput[2].setAttribute('required','');
    methodtype.addEventListener('change', sortfields);

    if(methodtype.value == 'currency'){
        cryptotype.forEach(element => {
            element.classList.add('d-none');
        });
        currinput[0].setAttribute('required','');
        currinput[1].setAttribute('required','');
        currinput[2].setAttribute('required','');

        cryptoinput[0].removeAttribute('required','');
        cryptoinput[2].removeAttribute('required','');
        
        currtype.forEach(curr => {
            curr.classList.remove('d-none');
        });

    }else{
        cryptoinput[0].setAttribute('required','');
        cryptoinput[2].setAttribute('required','');

        currinput[0].removeAttribute('required','');
        currinput[1].removeAttribute('required','');
        currinput[2].removeAttribute('required','');

        cryptotype.forEach(element => {
            element.classList.remove('d-none');
        });

        currtype.forEach(curr => {
            curr.classList.add('d-none');
        });
    }

    function sortfields() {
        if(methodtype.value == 'currency'){
            cryptotype.forEach(element => {
                element.classList.add('d-none');
            });
            currinput[0].setAttribute('required','');
            currinput[1].setAttribute('required','');
            currinput[2].setAttribute('required','');

            cryptoinput[0].removeAttribute('required','');
            cryptoinput[2].removeAttribute('required','');
            
            currtype.forEach(curr => {
                curr.classList.remove('d-none');
            });

        }else{
            cryptoinput[0].setAttribute('required','');
            cryptoinput[2].setAttribute('required','');

            currinput[0].removeAttribute('required','');
            currinput[1].removeAttribute('required','');
            currinput[2].removeAttribute('required','');

            cryptotype.forEach(element => {
                element.classList.remove('d-none');
            });

            currtype.forEach(curr => {
                curr.classList.add('d-none');
            });
        }
    }
    </script>


    @include('admin.footer')