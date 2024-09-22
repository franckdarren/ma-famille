@props(['title' => __('auth.confirm_password'), 'content' => __('auth.confirm_password_message'), 'button' => __('auth.confirm')])

@php
    $confirmableId = md5($attributes->wire('then'));
@endphp

<span {{ $attributes->wire('then') }} x-data x-ref="span" x-on:click="$wire.startConfirmingPassword('{{ $confirmableId }}')"
    x-on:password-confirmed.window="setTimeout(() => $event.detail.id === '{{ $confirmableId }}' && $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);">
    {{ $slot }}
</span>

@once
    <x-dialog-modal wire:model.live="confirmingPassword">
        <x-slot name="title">
            {{ $title }}
        </x-slot>

        <x-slot name="content">
            {{ $content }}

            <div class="mt-4" x-data="{}" x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)">
                <x-input type="password" class="mt-1 block w-3/4" placeholder="{{ __('auth.password') }}" autocomplete="current-password" x-ref="confirmable_password" wire:model="confirmablePassword"
                    wire:keydown.enter="confirmPassword" />

                <x-input-error for="confirmable_password" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-ts-button color="secondary" wire:click="stopConfirmingPassword" wire:loading.attr="disabled">
                {{ __('auth.cancel') }}
            </x-ts-button>

            <x-ts-button color="primary" class="ms-3" dusk="confirm-password-button" wire:click="confirmPassword" wire:loading.attr="disabled">
                {{ $button }}
            </x-ts-button>
        </x-slot>
    </x-dialog-modal>
@endonce
