@extends ('layouts.dashboard')
@section('page_heading','Checklist aanmaken')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
            <div class="form-group">
                <label>Vraag 1</label>
                <input class="form-control">
            </div>
            <div class="form-group">
                <label>Vraag 2</label>
                <input class="form-control">
            </div>
            <div class="form-group">
                <label>Vraag 3</label>
                <input class="form-control">
            </div>
            <div class="form-group">
                <label>Vraag 4</label>
                <input class="form-control">
            </div>            
            <button type="submit" class="btn btn-default">Done</button>
        </form>
    </div>
    
</div>
</div>
@stop