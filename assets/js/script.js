/**
 * @author
 * Banjo Mofesola Paul
 * Chief Developer, Planet NEST
 * mofesolapaul@live.com
 * Wednesday, December 7, 2016
 *
 * Re-used and Modified by
 * Falua Temitope Oyewole
 * Developer, Planet NEST
 * faluatemitopeo@gmail.com
 * Monday, September 11, 2017
 */

$(function () {
    'use strict';

    /** show login modal */
    if ($('.open-modal').length !== 0) {

        $('.open-modal').click(function (e) {
            e.preventDefault();
            if ($(this).data('modal-nostack')) $('dow-modal').removeClass('open');
            var _modal = $($(this).data('dow-modal'));
            _modal.toggleClass('open');
            _modal.hasClass('open') ? $('body').addClass('no-scroll') : $('body').removeClass('no-scroll');
        });
    }

    /** close login modal */
    $('.modal-close').click(function (e) {
        e.preventDefault();
        $(this).closest('.open').toggleClass('open');
        $(this).closest('.open').animate('fadeOut');
        $('body').removeClass('no-scroll');
    });

    /** password boxes */
    $('.password-box input').keyup(function () {
        togglePasswordButtons(this);
    }).click(function () {
        togglePasswordButtons(this);
    });

    /** toggle password reveal buttons */
    var togglePasswordButtons = function (ctx) {
        var parent = $(ctx).closest('.password-box');

        if ($(ctx).val() !== '') {
            if (!parent.hasClass('ok')) parent.addClass('ok');
        } else {
            if (parent.hasClass('ok')) parent.removeClass('ok');
        }
    };

    /** password reveal buttons */
    $('.password-box a').click(function (e) {
        e.preventDefault();

        var parent = $(this).closest('.password-box');
        var _input = $('input', parent);

        if ($(this).text() == 'show') {
            _input.attr('type', 'text');
            $(this).text('hide');
        } else {
            _input.attr('type', 'password');
            $(this).text('show');
        }
    });
});

