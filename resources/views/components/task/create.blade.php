

<x-layout>

    <form method="post" action="{{ route('task.store') }}">
        @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
<textarea name="description"  class="form-control" id="description" cols="30" rows="10"></textarea>
</div>
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" name="date" class="form-control" id="date">
  </div>
  <div class="form-group">
      <label for="user">user_id</label>
      <input type="number" name="user_id" class="form-control" id="user">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</x-layout>
