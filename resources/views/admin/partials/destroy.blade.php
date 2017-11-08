<div class="modal fade" id="destroy-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Изтриване!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Сигурни ли сте, че искате да изтриете този запис?</p>
            </div>
            <div class="modal-footer">
                {!! Form::open(['url' => '', 'method' => 'DELETE', 'class' => 'destroy_form']) !!}
                    <button type="submit" class="btn btn-danger">Изтрий</button>
                {!! Form::close() !!}
                <button type="button" class="btn btn-default" data-dismiss="modal">Отказ</button>
            </div>
        </div>
    </div>
</div>