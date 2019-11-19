var MANAGE_ACCORDION_STATE = {
    ACCORDION: '.ra-accordion',
    HIDE: 'hide.bs.collapse',
    SHOW: 'show.bs.collapse',
    init: function () {
        var self = MANAGE_ACCORDION_STATE;

        $(self.ACCORDION + ' .collapse').on(self.SHOW, function () {
            self.show($(this));
        });

        $(self.ACCORDION + ' .collapse').on(self.HIDE, function () {
            self.hide($(this))
        });
    },

    show: function (elem) {
        var self = MANAGE_ACCORDION_STATE;
        var status = elem.closest(self.ACCORDION).data('status');

        if (status === 'not-started') {
            elem.closest(self.ACCORDION).attr('data-status', 'in-progress');   
        }
    },

    hide: function (elem) {
        var self = MANAGE_ACCORDION_STATE;
        var originStatus = elem.closest(self.ACCORDION).data('origin-status');

        elem.closest(self.ACCORDION).attr('data-status', originStatus);
    },

    build: function () {
        MANAGE_ACCORDION_STATE.init();
    }
}

var SAVE = {
    ELEM: '.ra-accordion-save',

    onSave: function () {
        var self = SAVE;

        $(document).on('click', self.ELEM, function () {
            var parent = $(this).closest('.ra-accordion');
            parent.attr('data-status', 'completed');
            parent.attr('data-origin-status', 'completed');
            parent.find('.collapse').collapse('hide');
            parent.next('.ra-accordion').find('.collapse').collapse('show')
        })
    },

    build () {
        SAVE.onSave();
    }
}

$(document).ready (function () {
    MANAGE_ACCORDION_STATE.build();
    SAVE.build();
});