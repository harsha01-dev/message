
<!-- Paid Field -->
<div class="form-group col-sm-12">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::textarea('message', null, ['class' => 'form-control','cols'=>50,'rows'=>5]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('rememberMessage.index') !!}" class="btn btn-default">Cancel</a>
</div>
