@extends('layouts.app')

@section('content')
<div class="p-1 p-lg-3">
    <div class="row justify-content-center">
        <div class="flex-fill">
            <div class="card">
                <div class="card-header">Рабочий стол</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <system-index></system-index>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    import SystemIndex from "../js/components/System/SystemIndex";
    export default {
        components: {
            SystemIndex
        }
    }
</script>
