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

$('#reset-filter').click(function () {
    $("#filter input[type=radio]").prop('checked',false);
    return false;
});

$(".select2").select2({
    placeholder: "Начните вводить наименование",
    cache: true,
    ajax:{
        url: adminpath + "/product/related-product",
        delay:250,
        dataType: 'json',
        data: function (params) {
            return {
                q:params.term,
                page: params.page
            };
        },
        processResults: function (data, params) {
            return {
                results: data.items,
            };
        },
    },
});