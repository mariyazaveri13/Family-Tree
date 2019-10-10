(function ($) {
    $('#deleteMemberModal').on('show.bs.modal', function (event) {
        $(this).find('.member-id').val($(event.relatedTarget).data('memberid'))
        $(this).find('.member-name').text($(event.relatedTarget).data('membername'))
    });
})(jQuery);