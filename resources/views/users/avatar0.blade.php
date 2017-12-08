@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="/css/avatar-cropper.css">
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4"><div class="img-container"><img id="image" src="/images/avatar.png" alt="Picture"></div></div>
      <div class="col-md-4">

        <!-- 裁剪结果预览 -->
        <div class="docs-preview clearfix">
          <div class="img-preview preview-lg img-circle"></div>
        </div>

        <!-- 裁剪控制按钮 -->
        <div class="input-group docs-buttons col-sm-12">
          <label class="btn btn-warning btn-upload" for="inputImage" title="Upload image file">
            <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="选择头像">
              <span class="glyphicon glyphicon-upload"></span>
            </span>
          </label>
          <button type="button" class="btn btn-warning" data-method="reset" title="Reset">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="重置">
              <span class="glyphicon glyphicon-refresh"></span>
            </span>
          </button>
          <button type="button" class="btn btn-warning" data-method="zoom" data-option="0.1" title="Zoom In">
            <span class="docs-tooltip" data-toggle="tooltip" title="放大">
              <span class="glyphicon glyphicon-zoom-in"></span>
            </span>
          </button>
          <button type="button" class="btn btn-warning" data-method="zoom" data-option="-0.1" title="Zoom Out">
            <span class="docs-tooltip" data-toggle="tooltip" title="缩小">
              <span class="glyphicon glyphicon-zoom-out"></span>
            </span>
          </button>

          <!--裁剪移动 上下左右 -->
          <button type="button" class="btn btn-warning" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="左移"><span class="glyphicon glyphicon-arrow-left"></span></span>
          </button>
          <button type="button" class="btn btn-warning" data-method="move" data-option="10" data-second-option="0" title="Move Right">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="右移"><span class="glyphicon glyphicon-arrow-right"></span></span>
          </button>
          <button type="button" class="btn btn-warning" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="上移"><span class="glyphicon glyphicon-arrow-up"></span></span>
          </button>
          <button type="button" class="btn btn-warning" data-method="move" data-option="0" data-second-option="10" title="Move Down">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="下移"><span class="glyphicon glyphicon-arrow-down"></span></span>
          </button>
        </div>

        <!-- 裁剪结果 保存 -->
        <div class="input-group docs-buttons col-sm-12">
          <button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 252, &quot;height&quot;: 252 }">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="保存">保存</span>
          </button>
        </div>

        <!-- 裁剪结果 保存 -->
        <div class="docs-buttons">
          <!-- <h3>Toolbar:</h3> -->
          <div class="btn-group btn-group-crop">
            <button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
              <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="保存">保存</span>
            </button>
            <!-- <button type="button" class="btn btn-success col-sm-12" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 280, &quot;height&quot;: 280 }">
              <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="保存">保存</span>
            </button> -->
          </div>

          <!-- Show the cropped image in modal -->
          <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body"></div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
                </div>
              </div>
            </div>
          </div><!-- /.modal -->
        </div><!-- /.docs-buttons -->

        <!-- 裁剪比例快捷选择 -->
      </div>
    </div>
  </div>


@section('js')
<script src="/js/avatar-popper.min.js"></script>
<script src="/js/avatar-cropper.js"></script>
<script src="/js/avatar-main.js"></script>
@endsection

@endsection
