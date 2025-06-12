@include('user.layouts.header')
<main>
    <div class="container-fluid">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12 align-self-center">
                <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto"><b>Latest Crypto News</b></div>
                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Latest News</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-12 col-xl-12 mt-3">
            <div class="card">
                <div class="col-12 col-lg-12 col-xl-12 mt-3">
                    <div class="card shadow-sm border-0 rounded-lg">
                        <div class="card-body p-4">
                            <!-- Latest Bitcoin News Write-up -->
                            <div class="col-12 news-intro">
                                <h3 class="section-heading">Latest Bitcoin News</h3>
                                <p class="intro-text">Stay informed with the most recent updates and insights from the world of Bitcoin. Explore the latest articles, expert analysis, and market trends to enhance your trading strategies.</p>
                            </div>
        
                            <!-- Latest Bitcoin News Section -->
                            <div class="col-12 news-section">
                                <h3 class="section-heading">Recent Articles</h3>
                                <div id="news-container" class="news-container">
                                    <!-- News articles will be inserted here -->
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <!-- send all users email -->
        </div>
        </div>
        </div>
        </div>
        <!-- END: Card DATA-->
        </div>
        
        </main>
        
        <style>
            .section-heading {
                font-size: 26px;
                font-weight: bold;
                margin-bottom: 20px;
                color: #333;
                border-bottom: 2px solid #28a745; /* Green underline for professionalism */
                padding-bottom: 5px;
            }
        
            /* News Intro */
            .news-intro {
                margin-top: 40px;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s;
            }
        
            .news-intro:hover {
                transform: translateY(-2px); /* Subtle hover effect */
            }
        
            .intro-text {
                font-size: 16px;
                color: #555;
                margin-top: 10px;
                line-height: 1.5;
            }
        
            /* News Section */
            .news-section {
                margin-top: 20px;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }
        
            .news-article {
                border-bottom: 1px solid #e0e0e0;
                padding: 20px 0;
                display: flex; /* Aligns image and text side by side */
                gap: 15px; /* Space between image and text */
            }
        
            .news-article:last-child {
                border-bottom: none; /* Remove last article's border */
            }
        
            .news-article img {
                max-width: 120px; /* Fixed width for images */
                border-radius: 8px; /* Rounded corners for images */
                object-fit: cover; /* Maintain aspect ratio */
            }
        
            .news-article h4 {
                font-size: 18px;
                margin: 0;
                color: #333;
            }
        
            .news-article p {
                font-size: 14px;
                color: #666;
                line-height: 1.5;
            }
        
            .news-article a {
                color: #007bff;
                text-decoration: none;
                font-weight: 500; /* Slightly bolder links for emphasis */
            }
        
            .news-article a:hover {
                text-decoration: underline;
                color: #0056b3; /* Darker blue on hover */
            }
        </style>
        
        <script>
            // Your NewsAPI key
            const apiKey = '30b62edf3f55459e8e3d256451c62d4d';
        
            // Function to fetch latest Bitcoin news
            async function fetchBitcoinNews() {
                try {
                    const response = await fetch(`https://newsapi.org/v2/everything?q=bitcoin&sortBy=publishedAt&apiKey=${apiKey}`);
                    const data = await response.json();
                    displayNews(data.articles);
                } catch (error) {
                    console.error('Error fetching news:', error);
                }
            }
        
            // Function to display news articles in the news container
            function displayNews(articles) {
                const newsContainer = document.getElementById('news-container');
                newsContainer.innerHTML = ''; // Clear existing news
        
                articles.forEach(article => {
                    const newsArticle = `
                        <div class="news-article">
                            <img src="${article.urlToImage || 'https://via.placeholder.com/120'}" alt="News Image">
                            <div>
                                <h4><a href="${article.url}" target="_blank">${article.title}</a></h4>
                                <p>${article.description || 'No description available.'}</p>
                            </div>
                        </div>
                    `;
                    newsContainer.innerHTML += newsArticle;
                });
            }
        
            // Call the fetch function when the page loads
            window.onload = fetchBitcoinNews;
        </script>
        
@include('user.layouts.footer')