<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CINEMA21 |LOOKED MOVIES AND TV SHOWS</title>
    @vite('resources/css/app.css')
</head>
<body>
      <div class="w-full h-auto min-h-screen flex flex-col">
        <!---header section--->
        @include('header')

         <!---search section--->
         <div class="w-full h-auto min-h-screen">
          <div class="w-full pl-10 lg:pl-20 pr-10 lg:pr-0">
            <div class="relative w-full lg:w-80 mt-10 mb-5 bg-white drop-shadow-[0_0px_4px_rgba(0,0,0,0.25)]">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M28.525 27.475L22.9625 21.9C24.8885 19.6983 25.8834 16.8343 25.7372 13.9127C25.591 10.9911 24.315 8.24072 22.1787 6.24237C20.0425 4.24402 17.2132 3.15414 14.2883 3.20291C11.3635 3.25167 8.57212 4.43526 6.50367 6.50371C4.43521 8.57217 3.25163 11.3636 3.20286 14.2884C3.1541 17.2132 4.24397 20.0425 6.24233 22.1788C8.24068 24.315 10.9911 25.591 13.9126 25.7372C16.8342 25.8835 19.6983 24.8885 21.9 22.9625L27.475 28.525C27.6142 28.6642 27.803 28.7425 28 28.7425C28.1969 28.7425 28.3857 28.6642 28.525 28.525C28.6642 28.3858 28.7424 28.1969 28.7424 28C28.7424 27.8031 28.6642 27.6142 28.525 27.475ZM4.74996 14.5C4.74996 12.5716 5.32178 10.6866 6.39313 9.08319C7.46447 7.47981 8.98721 6.23013 10.7688 5.49218C12.5504 4.75422 14.5108 4.56114 16.4021 4.93734C18.2934 5.31355 20.0307 6.24215 21.3942 7.60571C22.7578 8.96927 23.6864 10.7066 24.0626 12.5979C24.4388 14.4892 24.2457 16.4496 23.5078 18.2312C22.7698 20.0127 21.5201 21.5355 19.9168 22.6068C18.3134 23.6782 16.4283 24.25 14.5 24.25C11.9151 24.2467 9.43708 23.2184 7.60932 21.3906C5.78155 19.5629 4.75326 17.0848 4.74996 14.5Z" class="fill-black group-hover:fill-develobe-500 duration-200"></path>
      </svg>
      <path d="M28.525 27.475L22.9625 21.9C24.8885 19.6983 25.8834 16.8343 25.7372 13.9127C25.591 10.9911 24.315 8.24072 22.1787 6.24237C20.0425 4.24402 17.2132 3.15414 14.2883 3.20291C11.3635 3.25167 8.57212 4.43526 6.50367 6.50371C4.43521 8.57217 3.25163 11.3636 3.20286 14.2884C3.1541 17.2132 4.24397 20.0425 6.24233 22.1788C8.24068 24.315 10.9911 25.591 13.9126 25.7372C16.8342 25.8835 19.6983 24.8885 21.9 22.9625L27.475 28.525C27.6142 28.6642 27.803 28.7425 28 28.7425C28.1969 28.7425 28.3857 28.6642 28.525 28.525C28.6642 28.3858 28.7424 28.1969 28.7424 28C28.7424 27.8031 28.6642 27.6142 28.525 27.475ZM4.74996 14.5C4.74996 12.5716 5.32178 10.6866 6.39313 9.08319C7.46447 7.47981 8.98721 6.23013 10.7688 5.49218C12.5504 4.75422 14.5108 4.56114 16.4021 4.93734C18.2934 5.31355 20.0307 6.24215 21.3942 7.60571C22.7578 8.96927 23.6864 10.7066 24.0626 12.5979C24.4388 14.4892 24.2457 16.4496 23.5078 18.2312C22.7698 20.0127 21.5201 21.5355 19.9168 22.6068C18.3134 23.6782 16.4283 24.25 14.5 24.25C11.9151 24.2467 9.43708 23.2184 7.60932 21.3906C5.78155 19.5629 4.75326 17.0848 4.74996 14.5Z" class="fill-black group-hover:fill-develobe-500 duration-200"></path>
    </svg>

    <div class="w-auto pl-28 pr-10 pt-6 pb-10 grid grid-cols-3 lg:grid-cols-5 gap-5  " id="dataWrapper">
    </div>

        <!---data loader--->
          <div class="w-full pl-28 pr-10 flex justify-center mb-5" id="autoLoad">
            <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
          <path fill="#000" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
            <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite"/>
          </path>
        </svg>
          </div>

          <!--notif error---->
          <div id="notification" class="min-w-[250px] p-4 bg-red-700 text-white text-center rounded-lg fixed z-index-10 top-0 right-0 mr-10 mt-5 drop-shadow-lg">
            <span id="notificationMessage">warning!!!</span>
          </div>
  </div>
      <input type="searchInput" type="search" class="block w-full p-8 lg:p-4 pl-12 lg:pl-10 text-2xl lg:text-sm text-black  focus:outline-none" placeholder="Cari......" required>
            </div>
          </div>
         </div>
        <!---footer section--->
        @include('footer')
      </div>

      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

      <script>
      let baseURL = "<?php echo $baseURL; ?>";
let imageBaseURL = "<?php echo $imageBaseURL; ?>";
let api_Key = "<?php echo $api_Key; ?>";
let searchKeyword = "";

// Sembunyikan loader dan notif di awal
$("#autoLoad").hide();
$("#notification").hide();

$('#searchInput').keypress(function(event) {
    var key = event.which;
    if (key == 13) {
        searchKeyword = $('#searchInput').val();
        if (searchKeyword) {
            search();
        }
        return false;
    }
});

function search() {
    $.ajax({
        url: `${baseURL}/search/multi?page=1&api_key=${api_Key}&query=${searchKeyword}`,
        type: "get",
        beforeSend: function() {
            $("#autoLoad").show();
            $("#dataWrapper").html("");
        }
    })
    .done(function(response) {
        $("#autoLoad").hide();

        if (response.results) {
            var htmlData = [];
            response.results.forEach(item => {
                if (item.media_type == 'movie' || item.media_type == 'tv') {
                    let searchTitle = "";
                    let originalDate = "";
                    let detailsURL = "";
                    if (item.media_type == 'movie') {
                        detailsURL = `/movie/${item.id}`;
                        originalDate = item.release_date;
                        searchTitle = item.title;
                    } else  {
                        detailsURL = `/tv/${item.id}`;
                        originalDate = item.first_air_date;
                        searchTitle = item.name;
                    }

                    let date = new Date(originalDate);
                    let searchYear = date.getFullYear();
                    let searchImage = item.poster_path
                        ? `${imageBaseURL}/w500${item.poster_path}`
                        : 'https://via.placeholder.com/300x400';
                    let searchRating = item.vote_average * 10;

                    htmlData.push(`
                        <a href="${detailsURL}" class="group">
                            <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex-col mr-8 duration-100">
                                <div class="overflow-hidden rounded-[32px]">
                                    <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="${searchImage}" />
                                </div>
                                <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">${searchTitle}</span>
                                <span class="font-inter text-sm mt-2 line-clamp-2 group-hover:line-clamp-none">${searchYear}</span>
                                <div class="flex flex-row mt-1 items-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 21H8V8L15 1L16.25 2.25C16.3667 2.36667 16.4627 2.525 16.538 2.725C16.6127 2.925 16.65 3.11667 16.65 3.3V3.65L15.55 8H21C21.5333 8 22 8.2 22.4 8.6C22.8 9 23 9.46667 23 10V12C23 12.1167 22.9873 12.2417 22.962 12.375C22.9373 12.5083 22.9 12.6333 22.85 12.75L19.85 19.8C19.7 20.1333 19.45 20.4167 19.1 20.65C18.75 20.8833 18.3833 21 18 21ZM6 8V21H2V8H6Z" fill="#38B6FF"></path>
                                    </svg>
                                    <span class="font-inter text-sm ml-1">${searchRating}%</span>
                                </div>
                            </div>
                        </a>
                    `);
                }
            });

            $("#dataWrapper").append(htmlData.join(""));
        }
    })
    .fail(function(jqHXR, ajaxOptions, thrownError) {
        $("#autoLoad").hide();
        $("#notificationMessage").text("Error terjadi, coba lagi bro.");
        $("#notification").show();

        setTimeout(function() {
            $("#notification").hide();
        }, 3000);
    });
}

      </script>
</body>
</html>
