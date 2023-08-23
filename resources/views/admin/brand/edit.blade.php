@extends('admin.layouts.master')

 @section('inner-content')
 <section class="content-header">
      <h1>
        Edit Brand
      </h1>
      
    </section>
<section class="content"> 
 <div class="row">
     <div class="col-md-12">
    <div class="box box-primary">
            <div class="box-header with-border">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{url('brand/update') }}" role="form">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $brand->id }}"
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Brand Name</label>
                  <input type="text" name="name" required class="form-control" id="exampleInputEmail1" value="{{ $brand->name }}" placeholder="Enter Brand name">
                </div>
                <div class="form-group">
                	<div class="input-group input-group-sm" id="slug-field">
                		<span class="input-group-addon" id="sizing-addon1">{{ url('') }}/</span>
                		<input type="text" class="form-control" value="{{ old('slug')?old('slug'):$brand->slug}}" id="slug" placeholder="Slug" name="slug"  aria-describedby="sizing-addon1" readonly value="">
                		<span class="input-group-addon slug-edit" onclick="slugedit();">Edit</span>
                	</div>
                </div>
                <div class="form-group">
                	<label>Description</label>
                	<textarea id="editor"  class="form-control tinymce-textarea" placeholder="Description" name="description">{{ old('descripition')?old('descripition'):$brand->discripition}}</textarea>
                </div>
                <div class="form-group">
                <input type="checkbox" name="top" value="1" @if($brand->top) checked @endif > Top<br>
                </div>
                <div class="form-group">
                <label>Meta Title</label>
                <input type="text" class="form-control" placeholder="Meta Title" name="seo_title" value="{{ old('seo_title')?old('seo_title'):$brand->seo_title }}">
                </div>
                <div class="form-group">
                <label>Meta Description</label>
                <textarea class="form-control" placeholder="Meta Description" name="seo_description">{{ old('seo_description')?old('seo_description'):$brand->seo_description }}</textarea>
                </div>
                 <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              
              <!-- /.box-body -->
            </form>
            </div>
          </div>
          </div>
      </div>
      </section>
      <script>
        $('input[name="slug"]').change(function(){
				$('input[name="slug"]').attr('readonly', true);
			});
			$('input[name="name"]').change(function(){
				var title = $(this).val();
				var value = returnValidSlug( title );
				$('input[name="slug"]').val(value);
				$(".main_slug").text(baseUrl+'/'+value+'/');
			});
        function slugedit() {
        	document.getElementById('slug').removeAttribute('readonly');
        }
        $(document).ready(function(){

			var editor_config = {
				path_absolute : "{{url('/')}}/",
				selector: "textarea.content",
				height: 300,
				plugins: [
				"advlist autolink lists link image charmap print preview hr anchor pagebreak",
				"searchreplace wordcount visualblocks visualchars code fullscreen",
				"insertdatetime media nonbreaking save table contextmenu directionality",
				"emoticons paste textcolor colorpicker textpattern"
				],
				toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
				relative_urls: false,
				file_browser_callback : function(field_name, url, type, win) {
					var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
					var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

					var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
					if (type == 'image') {
						cmsURL = cmsURL + "&type=Images";
					} else {
						cmsURL = cmsURL + "&type=Files";
					}

					tinyMCE.activeEditor.windowManager.open({
						file : cmsURL,
						title : 'Filemanager',
						width : x * 0.8,
						height : y * 0.8,
						resizable : "yes",
						close_previous : "no"
					});
				}
			};

			tinymce.init(editor_config);

		});
        </script>
 @endsection