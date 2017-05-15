export default {
  bind(el, binding, vnode) {
  	// So we set this element as a reference where we should listen events on in the popover with ref what we give as binding arg
  	 vnode.context.$refs[binding.arg].$refs.reference = el;
  }
};