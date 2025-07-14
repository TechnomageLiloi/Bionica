Bionic.Exercises = {
    create: function (type)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Bionic.Exercises.Create', {
            type: type
        }, function (data) {
            Bionic.Exercises.getCollection(type, $('#page'));
        }, function () {

        });
    },

    getCollection: function (type, wrap)
    {
        API.request('Bionic.Exercises.Collection', {
            type: type
        }, function (data) {
            wrap.html(data.render);
        }, function () {

        });
    },

    edit: function (keyExercise)
    {
        API.request('Bionic.Exercises.Edit', {
            key_exercise: keyExercise
        }, function (data) {
            const wrap = $('#page');
            wrap.html(data.render);
            wrap.show();
        }, function () {

        });
    },

    save: function (keyExercise)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#exercises-edit');
        API.request('Bionic.Exercises.Save', {
            key_exercise: keyExercise,
            title: jq_block.find('[name=title]').val(),
            mark: jq_block.find('[name=mark]').val(),
            type: jq_block.find('[name=type]').val(),
            summary: jq_block.find('[name=summary]').val()
        }, function (data) {
            Bionic.Exercises.getCollection(jq_block.find('[name=type]').val(), $('#page'));
        }, function () {

        });
    },

    remove: function (keyExercise, type)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Bionic.Exercises.Remove', {
            key_exercise: keyExercise
        }, function (data) {
            Bionic.Exercises.getCollection(type, $('#page'));
        }, function () {

        });
    }
}