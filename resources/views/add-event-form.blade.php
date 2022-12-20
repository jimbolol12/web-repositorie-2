
<form role="form" action="{{route('safe-event-form')}}" method="POST">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">name</label>
      <input name="name" type="text" class="form-control" id="name" placeholder="name">
    </div>
    <div class="form-group col-md-6">
      <label for="photo">photo</label>
      <input name="photo" type="text" class="form-control" id="photo" placeholder="photo">
    </div>
  </div>
  <div class="form-group">
    <label for="event_start">event start</label>
    <input name="event_start" type="date" class="form-control" id="event_start" placeholder="starting date">
  </div>
  <div class="form-group">
    <label for="event_end">even end</label>
    <input name="event_end" type="date" class="form-control" id="event_end" placeholder="ending date">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="available_tickets">available tickets</label>
      <input name="available_tickets" type="text" class="form-control" id="available_tickets">
    </div>
    <div class="form-group col-md-6">
      <label for="location">location</label>
      <input name="location" type="text" class="form-control" id="location" placeholder="your location">
    </div>
    <div class="form-group col-md-6">
      <label for="price">price</label>
      <input name="price" type="text" class="form-control" id="price" placeholder="price">
    </div>
    <div class="form-group col-md-6">
      <label for="descripton">description</label>
      <input name="description" type="text" class="form-control" id="description" placeholder="description">
    </div>
  
  <button type="submit" class="btn btn-primary">send</button>
</form>