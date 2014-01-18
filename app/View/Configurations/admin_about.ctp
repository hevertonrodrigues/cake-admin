<div class="row">
  <div class="col-lg-12">
    <div class="box">
      <div class="box-header">
        <h2><i class="fa fa-edit"></i><?php echo __('Sobre'); ?></h2>
      </div>
      <div class="box-content">
          <?php echo $this->Form->create('Configuration', array( 'action' => 'about', 'role' => 'form' ) );?>
            <?php echo $this->data['Configuration']['about']; ?>


<div class="form-group hidden-xs">
  <label class="control-label">Textarea with Bootstrap Wysiwig</label>
  <div data-target=".editor" data-role="editor-toolbar" class="btn-toolbar">
    <div class="btn-group">
      <a title="Font" data-toggle="dropdown" class="btn dropdown-toggle"><i class="fa fa-font"></i><b class="caret"></b></a>
      <ul class="dropdown-menu"></ul>
    </div>
    <div class="btn-group">
      <a title="Font Size" data-toggle="dropdown" class="btn dropdown-toggle"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
        <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
        <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
      </ul>
    </div>
    <div class="btn-group">
      <a title="Bold (Ctrl/Cmd+B)" data-edit="bold" class="btn"><i class="fa fa-bold"></i></a>
      <a title="Italic (Ctrl/Cmd+I)" data-edit="italic" class="btn"><i class="fa fa-italic"></i></a>
      <a title="Strikethrough" data-edit="strikethrough" class="btn"><i class="fa fa-strikethrough"></i></a>
      <a title="Underline (Ctrl/Cmd+U)" data-edit="underline" class="btn"><i class="fa fa-underline"></i></a>
    </div>
    <div class="btn-group">
      <a title="Bullet list" data-edit="insertunorderedlist" class="btn"><i class="fa fa-list-ul"></i></a>
      <a title="Number list" data-edit="insertorderedlist" class="btn"><i class="fa fa-list-ol"></i></a>
      <a title="Reduce indent (Shift+Tab)" data-edit="outdent" class="btn"><i class="fa fa-outdent"></i></a>
      <a title="Indent (Tab)" data-edit="indent" class="btn"><i class="fa fa-indent"></i></a>
    </div>
    <div class="btn-group">
      <a title="Align Left (Ctrl/Cmd+L)" data-edit="justifyleft" class="btn"><i class="fa fa-align-left"></i></a>
      <a title="Center (Ctrl/Cmd+E)" data-edit="justifycenter" class="btn"><i class="fa fa-align-center"></i></a>
      <a title="Align Right (Ctrl/Cmd+R)" data-edit="justifyright" class="btn btn-info"><i class="fa fa-align-right"></i></a>
      <a title="Justify (Ctrl/Cmd+J)" data-edit="justifyfull" class="btn"><i class="fa fa-align-justify"></i></a>
    </div>
      <div class="btn-group">
      <a title="Hyperlink" data-toggle="dropdown" class="btn dropdown-toggle"><i class="fa fa-link"></i></a>
      <div class="dropdown-menu input-append">
      <input type="text" data-edit="createLink" placeholder="URL" class="span2">
      <button type="button" class="btn">Add</button>
      </div>
      <a title="Remove Hyperlink" data-edit="unlink" class="btn"><i class="fa fa-cut"></i></a>
      </div>
      <div class="btn-group">
      <a title="Undo (Ctrl/Cmd+Z)" data-edit="undo" class="btn"><i class="fa fa-undo"></i></a>
      <a title="Redo (Ctrl/Cmd+Y)" data-edit="redo" class="btn"><i class="fa fa-repeat"></i></a>
      </div>
    </div>
    <div contenteditable="true" class="editor"><div align="right">
    Go ahead…
    </div>
  </div>
</div>







            <br/>
            <div class="form-actions">
              <?php echo $this->Form->end(__('Submit'));?>
              <button type="submit" class="btn btn-primary">Save changes</button>
              <button type="reset" class="btn">Cancel</button>
            </div>
          </form>
      </div>
    </div>
  </div><!--/col-->
</div><!--/row-->
