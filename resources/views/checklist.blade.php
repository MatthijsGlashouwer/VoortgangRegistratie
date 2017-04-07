@extends ('layouts.dashboard')
@section('page_heading','Checklist')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
            <div class="form-group">
                <label>Vragenlijst</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">Vraag 1
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">Vraag 2
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">Vraag 3
                    </label>
                </div>
            </div>
            <div></div>
            <button type="submit" class="btn btn-default">Done</button>
        </form>
    </div>
    
</div>
</div>
@stop