var modal = document.getElementById('modal');
var trigger = document.getElementById('modalTrigger');
var closer = document.getElementById('modalCloser');

trigger.onclick=function(){
    modal.style.display='block';
}

closer.onclick=function(){
    modal.style.display='none';
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
