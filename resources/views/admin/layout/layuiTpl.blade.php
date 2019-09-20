@verbatim
    <script type="text/html" id="tpl-create-edit">
        {{# if(d.btns){ }}
        <p>
            {{#  layui.each(d.btns, function(index, item){ }}

            <a href="{{ item.url }}" class="layui-btn {{ item.class_name }} layui-btn-xs"><i
                        class="layui-icon {{ item.icon || '' }}"></i>{{ item.name }}</a>
            {{#  }); }}
        </p>
        {{#  }; }}
        {{# if(d.btn_open){ }}
        <p>
        {{#  layui.each(d.btn_open, function(index, item){ }}
        <a lay-event="open_layer" data-w="{{ item.w || '1200px' }}"
           data-h="{{ item.h || '800px' }}"
           data-title="{{ item.title || item.name }}" data-url="{{ item.url }}"
           class="layui-btn {{ item.class_name }} layui-btn-xs"><i
                    class="layui-icon {{ item.icon || '' }}"></i>{{ item.name }}</a>
        {{#  }); }}
        </p>
        {{#  }; }}
        <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i
                    class="layui-icon layui-icon-edit"></i>编辑</a>
        <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i
                    class="layui-icon layui-icon-delete"></i>删除</a>
    </script>
    <script type="text/html" id="tpl-create-no-edit">
        {{# if(d.btns){ }}
        <p>
            {{#  layui.each(d.btns, function(index, item){ }}

            <a href="{{ item.url }}" class="layui-btn {{ item.class_name }} layui-btn-xs"><i
                        class="layui-icon {{ item.icon || '' }}"></i>{{ item.name }}</a>
            {{#  }); }}
        </p>
        {{#  }; }}
        {{# if(d.btn_open){ }}
        <p>
            {{#  layui.each(d.btn_open, function(index, item){ }}
            <a lay-event="open_layer" data-w="{{ item.w || '1200px' }}"
               data-h="{{ item.h || '800px' }}"
               data-title="{{ item.title || item.name }}" data-url="{{ item.url }}"
               class="layui-btn {{ item.class_name }} layui-btn-xs"><i
                        class="layui-icon {{ item.icon || '' }}"></i>{{ item.name }}</a>
            {{#  }); }}
        </p>
        {{#  }; }}

    </script>
    <script type="text/html" id="tpl-user-thumb">
        {{# if(d.thumb){ }}
        <img lay-event="show_img" style="" src= {{ d.thumb}}>
        {{#  }; }}
    </script>
    <script type="text/html" id="tpl-icon">
        <span class="{{ d.icon }}"></span>
    </script>

    <script>
        //回调函数
        function layui_switch(field,d,text,value){
            value = value || 1;
            text=text ||  '是|否';
            return '<input type="checkbox"  lay-skin="switch" lay-text="'+text+'" lay-filter="table-checked" ' +
                'value="'+d[field]+'" data-id="'+d.id+'"  data-field="'+field+'" '+(d[field]==value?'checked':'')+'>';
        }

    </script>
@endverbatim