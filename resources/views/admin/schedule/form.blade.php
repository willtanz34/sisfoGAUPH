<div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
    <label for="id" class="control-label">{{ 'Id' }}</label>
    <input class="form-control" name="id" type="number" id="id" value="{{ isset($schedule->id) ? $schedule->id : ''}}" >
    {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($schedule->user_id) ? $schedule->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('class') ? 'has-error' : ''}}">
    <label for="class" class="control-label">{{ 'Class' }}</label>
    <input class="form-control" name="class" type="text" id="class" value="{{ isset($schedule->class) ? $schedule->class : ''}}" >
    {!! $errors->first('class', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('room_id') ? 'has-error' : ''}}">
    <label for="room_id" class="control-label">{{ 'Room Id' }}</label>
    <input class="form-control" name="room_id" type="number" id="room_id" value="{{ isset($schedule->room_id) ? $schedule->room_id : ''}}" >
    {!! $errors->first('room_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('location_id') ? 'has-error' : ''}}">
    <label for="location_id" class="control-label">{{ 'Location Id' }}</label>
    <input class="form-control" name="location_id" type="number" id="location_id" value="{{ isset($schedule->location_id) ? $schedule->location_id : ''}}" >
    {!! $errors->first('location_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('marker_collect_at') ? 'has-error' : ''}}">
    <label for="marker_collect_at" class="control-label">{{ 'Marker Collect At' }}</label>
    <input class="form-control" name="marker_collect_at" type="date" id="marker_collect_at" value="{{ isset($schedule->marker_collect_at) ? $schedule->marker_collect_at : ''}}" >
    {!! $errors->first('marker_collect_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('marker_return_at') ? 'has-error' : ''}}">
    <label for="marker_return_at" class="control-label">{{ 'Marker Return At' }}</label>
    <input class="form-control" name="marker_return_at" type="date" id="marker_return_at" value="{{ isset($schedule->marker_return_at) ? $schedule->marker_return_at : ''}}" >
    {!! $errors->first('marker_return_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('attendance_collect_at') ? 'has-error' : ''}}">
    <label for="attendance_collect_at" class="control-label">{{ 'Attendance Collect At' }}</label>
    <input class="form-control" name="attendance_collect_at" type="date" id="attendance_collect_at" value="{{ isset($schedule->attendance_collect_at) ? $schedule->attendance_collect_at : ''}}" >
    {!! $errors->first('attendance_collect_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('marker_return_at') ? 'has-error' : ''}}">
    <label for="marker_return_at" class="control-label">{{ 'Marker Return At' }}</label>
    <input class="form-control" name="marker_return_at" type="date" id="marker_return_at" value="{{ isset($schedule->marker_return_at) ? $schedule->marker_return_at : ''}}" >
    {!! $errors->first('marker_return_at', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
