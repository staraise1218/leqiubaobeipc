define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'product/album/index',
                    add_url: 'product/album/add',
                    edit_url: 'product/album/edit',
                    del_url: 'product/album/del',
                    multi_url: 'product/album/multi',
                    table: 'product_album',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                showExport: false,
                search:false,
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id'), operate:false},
                        {field: 'title', title: __('Title'), operate: 'like'},
                        {field: 'thumbimage', title: __('Thumbimage'), operate:false, formatter: Table.api.formatter.image},
                        {field: 'description', title: __('Description'), visible:false, operate: false},
                        {field: 'tag', title: __('Tag'), operate:false},
                        {field: 'createtime', title: __('Createtime'), operate:false, addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'operate', title: __('Operate'), buttons: [
                                {name: 'audio', text: '音频', title: '音频', icon: 'fa fa-list', classname: 'btn btn-xs btn-primary', url: 'product/audio/index'}
                            ], table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});