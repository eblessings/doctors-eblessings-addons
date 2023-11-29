$.ajaxSetup({headers: {'X-CSRF-Token': csrfToken}});

$.extend({
	ajaxJSON: function(method, url, data) {
		return $.ajax({
			type: method.toUpperCase(),
			url: url,
			data: JSON.stringify(data),
			contentType: 'application/json; charset=utf-8',
			dataType: 'json'
		});
	}
});

new Vue({
	el: '#rules',

	data: {
		showModal: false,
		errorMessage: '',
		editedIndex: null,
		rule: {id: '', name: '', expression: '', created: ''},
		rules: existingRules || [],
		itemUrl: '',
		itemJson: '',
		currentTheme: currentTheme,
		messages: messages,
	},

	watch: {
		showModal: function () {
			if (this.showModal) {
				$(this.$refs.vuemodal).modal('show');
			} else {
				$(this.$refs.vuemodal).modal('hide');
			}
		}
	},

	methods: {
		resetForm: function() {
			this.rule = {id: '', name: '', expression: '', created: ''};
			this.showModal = false;
			this.editedIndex = null;
		},

		addRule: function () {
			if (this.rule.name.trim()) {
				this.errorMessage = '';

				var self = this;
				$.ajaxJSON('post', '/advancedcontentfilter/api/rules', this.rule)
				.then(function (responseJSON) {
					self.rules.push(responseJSON.rule);
					self.resetForm();
				}, function (response) {
					self.errorMessage = response.responseJSON.message;
				});
			}
		},

		editRule: function (rule) {
			this.editedIndex = this.rules.indexOf(rule);
			this.rule = Object.assign({}, rule);
			this.showModal = true;
		},

		saveRule: function (rule) {
			this.errorMessage = '';

			var self = this;
			$.ajaxJSON('put', '/advancedcontentfilter/api/rules/' + rule.id, rule)
			.then(function () {
				self.rules[self.editedIndex] = rule;
				self.resetForm();
			}, function (response) {
				self.errorMessage = response.responseJSON.message;
			});
		},

		toggleActive: function (rule) {
			var previousValue = this.rules[this.rules.indexOf(rule)].active;
			var newValue = Math.abs(parseInt(rule.active) - 1);

			this.rules[this.rules.indexOf(rule)].active = newValue;

			var self = this;
			$.ajaxJSON('put', '/advancedcontentfilter/api/rules/' + rule.id, {'active': newValue})
			.fail(function (response) {
				self.rules[self.rules.indexOf(rule)].active = previousValue;
				console.log(response.responseJSON.message);
			});
		},

		deleteRule: function (rule) {
			if (confirm('Are you sure you want to delete this rule?')) {
				var self = this;
				$.ajaxJSON('delete', '/advancedcontentfilter/api/rules/' + rule.id)
				.then(function () {
					self.rules.splice(self.rules.indexOf(rule), 1);
				}, function (response) {
					console.log(response.responseJSON.message);
				});
			}
		},

		showVariables: function () {
			var urlParts = this.itemUrl.split('/');
			var guid = urlParts[urlParts.length - 1];

			this.itemJson = '';

			var self = this;
			$.ajaxJSON('get', '/advancedcontentfilter/api/variables/' + guid)
			.then(function (responseJSON) {
				self.itemJson = responseJSON.variables;
			}, function (response) {
				self.itemJson = response.responseJSON.message;
			});

			return false;
		}
	},

	// These render functions have been compiled from templates/advancedcontentfilter.vue, check this file out for instructions
	render: function () {
		with(this){return _c('div',{attrs:{"id":"rules"}},[_c('p',[_c('a',{attrs:{"href":"settings/addons"}},[_v("🔙 "+_s(messages.backtosettings))])]),_c('h1',[_v(_s(messages.title)+" "),_c('a',{staticClass:"btn btn-default btn-sm",attrs:{"href":"advancedcontentfilter/help","title":messages.help}},[_c('i',{staticClass:"fa fa-question fa-2x",attrs:{"aria-hidden":"true"}})])]),_c('div',[_v(_s(messages.intro))]),_c('h2',[_v(_s(messages.your_rules)+" "),_c('button',{staticClass:"btn btn-primary btn-sm",attrs:{"title":messages.add_a_rule},on:{"click":function($event){showModal = true}}},[_c('i',{staticClass:"fa fa-plus fa-2x",attrs:{"aria-hidden":"true"}})])]),(rules.length === 0)?_c('div',{},[_v(_s(messages.no_rules))]):_e(),_c('ul',{staticClass:"list-group"},_l((rules),function(rule){return _c('li',{staticClass:"list-group-item"},[_c('p',{staticClass:"pull-right"},[(parseInt(rule.active))?_c('button',{staticClass:"btn btn-xs btn-primary",attrs:{"type":"button","aria-label":messages.disable_this_rule,"title":messages.disable_this_rule},on:{"click":function($event){toggleActive(rule)}}},[_c('i',{staticClass:"fa fa-toggle-on",attrs:{"aria-hidden":"true"}}),_v(" "+_s(messages.enabled))]):_c('button',{staticClass:"btn btn-xs btn-default",attrs:{"type":"button","aria-label":messages.enable_this_rule,"title":messages.enable_this_rule},on:{"click":function($event){toggleActive(rule)}}},[_c('i',{staticClass:"fa fa-toggle-off",attrs:{"aria-hidden":"true"}}),_v(" "+_s(messages.disabled))]),_v(" "),_c('button',{staticClass:"btn btn-xs btn-primary",attrs:{"type":"button","aria-label":messages.edit_this_rule,"title":messages.edit_this_rule},on:{"click":function($event){editRule(rule)}}},[_c('i',{staticClass:"fa fa-pencil",attrs:{"aria-hidden":"true"}})]),_v(" "),_c('button',{staticClass:"btn btn-xs btn-default",attrs:{"type":"button","aria-label":messages.delete_this_rule,"title":messages.delete_this_rule},on:{"click":function($event){deleteRule(rule)}}},[_c('i',{staticClass:"fa fa-trash-o",attrs:{"aria-hidden":"true"}})])]),_c('h3',{staticClass:"list-group-item-heading"},[_v(_s(messages.rule)+" #"+_s(rule.id)+": "+_s(rule.name))]),(rule.expression)?_c('pre',{staticClass:"list-group-item-text"},[_v(_s(rule.expression))]):_e()])})),_c('div',{ref:"vuemodal",staticClass:"modal fade",attrs:{"tabindex":"-1","role":"dialog"}},[_c('div',{staticClass:"modal-dialog",attrs:{"role":"document"}},[_c('div',{staticClass:"modal-content"},[_c('div',{staticClass:"modal-header"},[(currentTheme === 'frio')?_c('button',{staticClass:"close",attrs:{"type":"button","data-dismiss":"modal","aria-label":messages.close},on:{"click":function($event){showModal = false}}},[_c('span',{attrs:{"aria-hidden":"true"}},[_v("×")])]):_e(),(rule.id)?_c('h3',[_v(_s(messages.edit_the_rule)+" \""+_s(rule.name)+"\"")]):_e(),(!rule.id)?_c('h3',[_v(_s(messages.add_a_rule))]):_e()]),_c('div',{staticClass:"modal-body"},[_c('form',[(errorMessage)?_c('div',{staticClass:"alert alert-danger",attrs:{"role":"alert"}},[_v(_s(errorMessage))]):_e(),_c('div',{staticClass:"form-group"},[_c('input',{directives:[{name:"model",rawName:"v-model",value:(rule.name),expression:"rule.name"}],staticClass:"form-control",attrs:{"placeholder":messages.rule_name},domProps:{"value":(rule.name)},on:{"input":function($event){if($event.target.composing)return;$set(rule, "name", $event.target.value)}}})]),_c('div',{staticClass:"form-group"},[_c('input',{directives:[{name:"model",rawName:"v-model",value:(rule.expression),expression:"rule.expression"}],staticClass:"form-control",attrs:{"placeholder":messages.rule_expression},domProps:{"value":(rule.expression)},on:{"input":function($event){if($event.target.composing)return;$set(rule, "expression", $event.target.value)}}})])])]),_c('div',{staticClass:"modal-footer"},[_c('button',{staticClass:"btn btn-default",attrs:{"type":"button","data-dismiss":"modal","aria-label":"Close"},on:{"click":function($event){resetForm()}}},[_v(_s(messages.cancel))]),(rule.id)?_c('button',{staticClass:"btn btn-primary",attrs:{"slot":"button","type":"button"},on:{"click":function($event){saveRule(rule)}},slot:"button"},[_v(_s(messages.save_this_rule))]):_e(),(!rule.id)?_c('button',{staticClass:"btn btn-primary",attrs:{"slot":"button","type":"button"},on:{"click":function($event){addRule()}},slot:"button"},[_v(_s(messages.add_a_rule))]):_e()])])])]),_c('form',{staticClass:"form-inline",on:{"submit":function($event){$event.preventDefault();showVariables()}}},[_c('fieldset',[_c('legend',[_v("Show post variables")]),_c('div',{staticClass:"form-group",staticStyle:{"width":"50%"}},[_c('label',{staticClass:"sr-only",attrs:{"for":"itemUrl"}},[_v("Post URL or item guid")]),_c('input',{directives:[{name:"model",rawName:"v-model",value:(itemUrl),expression:"itemUrl"}],staticClass:"form-control",staticStyle:{"width":"100%"},attrs:{"id":"itemUrl","placeholder":"Post URL or item guid"},domProps:{"value":(itemUrl)},on:{"input":function($event){if($event.target.composing)return;itemUrl=$event.target.value}}})]),_c('button',{staticClass:"btn btn-primary",attrs:{"type":"submit"}},[_v("Show Variables")])])]),_c('pre',{},[_v(_s(itemJson))])])}
	},

	staticRenderFns: [
	],
});
