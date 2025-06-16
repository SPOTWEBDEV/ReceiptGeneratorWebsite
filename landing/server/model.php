<?php

function Model() {
    return '
    <div class="toast-container position-fixed top-0 end-0 p-3 toast-index toast-rtl">
        <div class="toast hide toast fade" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header toast-img">
                <img class="rounded me-2" src="../assets/images/dashboard-8/profile.png" alt="profile">
                <strong class="me-auto">Zono Theme</strong>
                <small>5 min ago</small>
                <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body toast-dark">Hello, I\'m a web-designer.</div>
        </div>
    </div>
    ';
}

?>
