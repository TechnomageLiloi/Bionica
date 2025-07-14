Bionic.Dashboard = {
    show: function ()
    {
        API.request('Bionic.Dashboard.Show', {

        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    }
}