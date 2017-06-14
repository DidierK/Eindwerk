<style>
.Spinner {
  border: 2px solid #f3f3f3;
  border-top: 2px solid #3498db;
  border-radius: 50%;
  animation: spin 0.5s linear infinite;
}

.Spinner--add-item-modal {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 32px;
  height: 32px;

}

.Spinner--add-item-submit {
  width: 16px;
  height: 16px;
}
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

</style>
<template>
    <div class="Spinner"></div>
</template>
<script>
    
</script>