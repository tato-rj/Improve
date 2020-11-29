<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title">Are you sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-danger">This action cannot be undone</p>
        <form method="POST" action="{{route('products.destroy', $product)}}">
          @csrf
          @method('DELETE')
          <button class="btn btn-primary btn-block">Yes, delete this product</button>
        </form>
      </div>
    </div>
  </div>
</div>