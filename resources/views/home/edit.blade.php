@extends('layouts.app-master')

@section('content')
<form class="needs-validation" action="/workers/{{ $work->id }}" method="POST" >
    @csrf
    @method('PUT')
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationTooltip01">Vardas</label>
        <input type="text" class="form-control" id="validationTooltip01" value="{{$work->vardas}}" placeholder="First name" name="vardas" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationTooltip02">Pavarde</label>
        <input type="text" class="form-control" id="validationTooltip02" value="{{$work->pavarde }}" placeholder="Last name" name="pavarde"  required>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationTooltip03">Miestas</label>
        <input type="text" class="form-control" id="validationTooltip03" value="{{$work->miestas }}" name="miestas" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationTooltip05">Servisas</label>
        <input type="text" class="form-control" id="validationTooltip05" value="{{$work->servisas }}" name="servisas" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationTooltip06">Image</label>
        <input type="text" class="form-control" id="validationTooltip06" value="{{$work->image }}" name="image" required>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>
@endsection