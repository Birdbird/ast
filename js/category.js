$(function () {
    var options = {
        indexed: true,
        on_each_change: baseUrl+'/admin/category/list',
        choose: '选择分类'
				//preselect: {'category': ['220','226','229']}
    };
    $.getJSON(baseUrl+'/admin/category/list', function (tree) {
        $('#Post_category_id').optionTree(tree, options).change();
    });
});