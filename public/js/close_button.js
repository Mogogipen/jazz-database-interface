document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.message .delete') || []).forEach(($delete) => {
      $notification = $delete.parentNode.parentNode;
      $delete.addEventListener('click', () => {
        $notification.parentNode.removeChild($notification);
      });
    });
  });