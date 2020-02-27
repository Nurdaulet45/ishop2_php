$('.delete').click(function () {
    var res = confirm('Подтвердите действие');

    if (!res) return false;

});
$('.sidebar-menu a.nav-link').each(function () {
    var location2 = window.location.protocol + '//' + window.location.host + window.location.pathname;
    var link = this.href;
    if (link == location2){
        $(this).parent().addClass('active');
        $(this).closest('treeview').addClass('active');
    }
});