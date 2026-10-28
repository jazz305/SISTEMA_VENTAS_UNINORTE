<div id="modalmantenimiento" class="modal fade" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content bd-0">
            <form action="post" id="producto_form">
                <div class="modal-header pd-y-20 pd-x-25">
                    <h4 class="modal-title" id="mdltitulo"></h4>
                </div>

                <div class="modal-body pd-25">
                    <input type="hidden" id="prod_id" name="prod_id">
                    <div class="form-group">
                        <label class="form-label" for="prod_nom">Nombre:</label>
                        <input class="form-control" id="prod_nom" name="prod_nom" placeholder="Ingrese nombre" type="text" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Guardar</button>
                    <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->