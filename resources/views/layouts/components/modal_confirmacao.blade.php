<div class="modal fade" id="{{$modal_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><strong>{{$modal_title ?? "Confirmação"}}</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                {{$modal_body ?? "Você tem certeza?"}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <form action="{{$form_action ?? '#'}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">{{$texto_botao ?? "Confirmar"}}</button>
            </form>
            </div>
        </div>
    </div>
</div>
