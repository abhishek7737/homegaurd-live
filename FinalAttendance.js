// Hide submenus
$('#body-row .collapse').collapse('hide');   
// Collapse/Expand icon
$('#collapse-icon').addClass('fa fa-times'); 

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
});

//Sidebar collapse function
function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-collapsed sidebar-expanded');
    
    // Treating d-flex/d-none on separators with title
    var SeparatorTitle = $('.sidebar-separator-title');
    if ( SeparatorTitle.hasClass('d-flex') ) {
        SeparatorTitle.removeClass('d-flex');
    } else {
        SeparatorTitle.addClass('d-flex');
    }
    
    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa fa-times fa fa-bars');
}

//Edit details popup  
function openForm() {
    document.getElementById("loginPopup").style.display="block";
}

function closeForm() {
    document.getElementById("loginPopup").style.display= "none";
}

function finalizeList(){
    $('.open-button').hide();
    $('.remove').hide();
}
function addVolunteer () {
	document.getElementById("loginPopup").style.display="block";
}
/*
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    var modal = document.getElementById('loginPopup');
    if (event.target == modal) {
      closeForm();
    }
}
*/  

//Remove volunteer popup
function deleteForm() {
    document.getElementById("deletePopup").style.display="block";
}

function closeFormDelete() {
    document.getElementById("deletePopup").style.display= "none";
}

/*
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    var modal = document.getElementById('deletePopup');
    if (event.target == modal) {
      closeFormDelete();
    }
}
*/