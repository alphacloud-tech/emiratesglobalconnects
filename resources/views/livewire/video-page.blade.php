@extends('layouts.app')

@section('title', 'Video')
@section('content')


    <!-- Start of Breadcrumb section ============================================= -->
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative"
        data-background="{{ asset('frontend/assets/img/bg/bread-bg.jpg') }} ">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute">
            <img src=" {{ asset('frontend/assets/img/shape/tmd-sh.png') }}" alt=""></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>Video</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Video</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section  ============================================= -->

    <section id="ft-blog-post-feed" class="ft-blog-post-feed-section page-padding">
        <div class="container">
            <div id="video-list"></div>
        </div>
    </section>


@endsection


@section('styles')

@endsection


@section('scripts')
    <script>
        const API_KEY = 'AIzaSyCxNufxXaie5ayGMEhuNg-gouIxKY6HKY0';
        const CHANNEL_ID = 'UC-ZCPV15JdVxgzBxby24NHA';
        // const VIDEO_LIST_CONTAINER = document.getElementById('video-list');

        const VIDEO_LIST_CONTAINER = document.getElementById('video-list'); // Get the target element
        const MAX_RESULTS = 50; // Set the number of results per page (maximum: 50)

        function createVideoGrid(videoItems) {
            // Create a container for the grid
            const gridContainer = document.createElement('div');
            gridContainer.className = 'row';

            videoItems.forEach(video => {
                const videoId = video.id.videoId;
                const videoTitle = video.snippet.title;

                // Create video elements (iframe and title)
                const iframe = document.createElement('iframe');
                iframe.src = `https://www.youtube.com/embed/${videoId}`;
                iframe.width = "100%";
                iframe.height = "300px";
                iframe.frameBorder = "0";
                iframe.allowFullscreen = true;

                const titleElement = document.createElement('h2');
                titleElement.textContent = videoTitle;

                // Create a column for the video
                const videoColumn = document.createElement('div');
                videoColumn.className = 'col-md-3';
                videoColumn.appendChild(iframe);
                // videoColumn.appendChild(titleElement);

                // Append the video column to the grid container
                gridContainer.appendChild(videoColumn);
            });

            return gridContainer;
        }

        function fetchAndDisplayAllVideos(pageToken = '') {
            fetch(
                    `https://www.googleapis.com/youtube/v3/search?key=${API_KEY}&channelId=${CHANNEL_ID}&part=snippet,id&order=date&maxResults=${MAX_RESULTS}&pageToken=${pageToken}`
                )
                .then(response => response.json())
                .then(data => {
                    const videoItems = data.items;

                    // Remove the last video
                    videoItems.pop();

                    // Create the video grid for the current page of results
                    const grid = createVideoGrid(videoItems);
                    VIDEO_LIST_CONTAINER.appendChild(grid);

                    // Check if there are more pages of results
                    if (data.nextPageToken) {
                        // If there is a nextPageToken, fetch the next page of results
                        fetchAndDisplayAllVideos(data.nextPageToken);
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        }

        // Initial fetch and display
        fetchAndDisplayAllVideos();

        // Periodically fetch and display videos (e.g., every 10 minutes)
        setInterval(fetchAndDisplayAllVideos, 600000);
    </script>

@endsection


{{-- </div> --}}
