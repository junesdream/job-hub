<!-- resources/views/partials/buttons.blade.php -->
<div class="d-flex justify-content-end mb-3">
    <a href="{{ route($resource . '.create') }}" class="btn btn-primary">Create {{ ucfirst($resource) }}</a>
</div>