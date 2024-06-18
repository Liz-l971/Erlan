document.addEventListener('DOMContentLoaded', function() {
    const togglermob = document.querySelector('.sidebar_togglermob');
    const sidebarmob = document.querySelector('#sidebarmob');
    const closeBtnmob = document.querySelector('#close_btnmob');
    const contentmob = document.querySelector('#contentmob');
    togglermob.addEventListener('click', function(event) {
        event.stopPropagation();
        sidebarmob.style.right = "100px";
        contentmob.style.paddingRight = "363px";
    });
    closeBtnmob.addEventListener('click', function(event) {
        event.stopPropagation();
        sidebarmob.style.right = "-363px";
        contentmob.style.paddingRight = "63px";
    });
    document.addEventListener('click', function(event) {
        if (!sidebarmob.contains(event.target) && sidebarmob.style.right === "0px") {
            sidebarmob.style.right = "-363px";
            contentmob.style.paddingRight ="63px";
        }
    });
    document.addEventListener('click', function(event) {
        if (sidebarmob.style.right === "100px" && event.target !== togglermob) {
            sidebarmob.style.right = "-363px";
            contentmob.style.paddingRight = "63px";
        }
    });
});
