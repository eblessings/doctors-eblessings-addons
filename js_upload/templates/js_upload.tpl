
<div id="js_upload">
	<noscript>
		<p>Please enable JavaScript to use file uploader.</p>
		<!-- or put a simple form for upload here -->
	</noscript>
</div>

<script type="text/javascript">
	var uploader = null;
	function createUploader() {
		uploader = new qq.FileUploader({
			element: document.getElementById('js_upload'),
			action: '{{$post_url}}',

			template: '<div class="qq-uploader">' +
				'<div class="qq-upload-drop-area"><span>{{$drop_msg}}</span></div>' +
				'<div class="qq-upload-button">{{$upload_msg}}</div>' +
				'<ul class="qq-upload-list"></ul>' +
				'</div>',

			// template for one item in file list
			fileTemplate: '<li>' +
				'<span class="qq-upload-file"></span>' +
				'<span class="qq-upload-spinner"></span>' +
				'<span class="qq-upload-size"></span>' +
				'<a class="qq-upload-cancel" href="#">{{$cancel}}</a>' +
				'<span class="qq-upload-failed-text">{{$failed}}</span>' +
				'</li>',

			debug: true,
			sizeLimit: {{$maximagesize}},
			onSubmit: function(id, filename) {
				let newalbumElm = document.getElementById('photos-upload-newalbum');
				let albumElm = document.getElementById('photos-upload-album-select');

				let contact_allow = document.querySelector('[name="contact_allow"]:not(:disabled)');
				let circle_allow  = document.querySelector('[name="circle_allow"]:not(:disabled)');
				let contact_deny  = document.querySelector('[name="contact_deny"]:not(:disabled)');
				let circle_deny   = document.querySelector('[name="circle_deny"]:not(:disabled)');

				uploader.setParams({
					newalbum      : newalbumElm ? newalbumElm.value : '',
					album         : albumElm ? albumElm.value : '',
					not_visible   : document.getElementById('photos-upload-noshare').checked,
					contact_allow : contact_allow ? contact_allow.value : '',
					circle_allow  : circle_allow  ? circle_allow.value  : '',
					contact_deny  : contact_deny  ? contact_deny.value  : '',
					circle_deny   : circle_deny   ? circle_deny.value   : '',
				});
			}
		});
	}

	window.addEventListener('load', createUploader);
</script>
