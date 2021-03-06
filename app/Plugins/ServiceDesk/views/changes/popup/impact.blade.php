<?php 
$impact ="";
if ($change->getGeneralByIdentifier('impact')) {
    $impact = $change->getGeneralByIdentifier('impact')->value;
}

?>
<div class="modal fade" id="changeimpact{{$change->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Impact</h4>
                {!! Form::open(['url'=>'service-desk/general/'.$change->id.'/sd_changes','files'=>true]) !!}
            </div>
            <div class="modal-body">
                <!-- Form  -->
                <div class="row">
                    
                    <div class="col-md-12">
                       {!! Form::label('impact','Impact') !!}
                       {!! Form::textarea('impact',$impact,['class'=>'form-control','id'=>'impact']) !!}
                       {!! Form::hidden('identifier','impact') !!}
                    </div>
                     <div class="col-md-12">
                       {!! Form::label('attachment','Attachment') !!}
                       {!! Form::file('attachment[]') !!}
                    </div>
                    
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="{{Lang::get('lang.save')}}">
                {!! Form::close() !!}
            </div>
            <!-- /Form -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
    $(function () {
        $("#impact").wysihtml5();
    });
</script>