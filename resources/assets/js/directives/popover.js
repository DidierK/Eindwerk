export default {
  bind(el, binding, vnode) {
  	// We bind the element to the element with ref="popover5" (for example) and add the value of "el" to it's value.
  	// vnode.context.$refs[binding.arg] simply let us access the correct parent component.
  	// The $refs.reference is in the child component
    vnode.context.$refs[binding.arg].$refs.reference = el;
  }
};