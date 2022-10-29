<!-- New Video Player Modal Start-->
<div class="modal fade VideoTypeModal" id="newVideoPlayerModal" tabindex="-1" aria-labelledby="newVideoPlayerModal" aria-hidden="true">

    <div class="modal-header border-bottom-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="akar-icons:cross"></span></button>
    </div>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="video-player-area">
                    <!-- HTML 5 Video -->
                    <video id="player" playsinline controls data-poster="{{ getImageFile(get_option('become_instructor_video_preview_image')) }}" controlsList="nodownload">
                        <source src="{{ getVideoFile(get_option('become_instructor_video')) }}" type="video/mp4" />
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- New Video Player Modal End-->
