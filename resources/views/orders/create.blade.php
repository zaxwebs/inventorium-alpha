@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		@livewire('order-create-form')
	</div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/bootstrap-multiselect.min.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('js/bootstrap-multiselect.min.js') }}"></script>
<script>
	/*
	function onElementInserted(containerSelector, elementSelector, callback) {

const onMutationsObserved = function(mutations) {
		mutations.forEach(function(mutation) {
				if (mutation.addedNodes.length) {
						const elements = $(mutation.addedNodes).find(elementSelector);
						for (let i = 0, len = elements.length; i < len; i++) {
								callback(elements[i]);
						}
				}
		});
};

const target = $(containerSelector)[0];
const config = { childList: true, subtree: true };
const MutationObserver = window.MutationObserver || window.WebKitMutationObserver;
const observer = new MutationObserver(onMutationsObserved);    
observer.observe(target, config);

}

const handleSelects = () => {
	$('select').multiselect({
				enableFiltering: true,
				buttonTextAlignment: 'left',
				buttonWidth: '100%',
				enableCaseInsensitiveFiltering: true,
				templates: {
        filter: '<div class="multiselect-filter"><div class="input-group p-1"><input class="form-control multiselect-search" type="text" /><div class="input-group-append"><button class="multiselect-clear-filter input-group-text" type="button">Clear</button></div></div></div>'
      }
			})
}

$(document).ready(function() {
	handleSelects()

	onElementInserted('body', 'select', function(element) {
	handleSelects()
	})
})
*/
</script>
@endsection