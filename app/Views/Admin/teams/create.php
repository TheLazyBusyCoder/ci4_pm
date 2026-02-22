<?= $this->extend('Layouts/admin') ?>

<?= $this->section('css') ?>
<!-- form -->
<style>
    .l-form-t50y8iv17088 {
        background-color: var(--bg-nav);
        padding: 20px;
        border: 1px solid var(--border-color);
    }
    .l-section-title-t50y8iv17088 {
        font-size: 14px;
        font-weight: 600;
        margin: 16px 0 10px 0;
        padding-bottom: 6px;
        border-bottom: 1px solid var(--border-color);
    }
    .l-section-title-t50y8iv17088:first-child {
        margin-top: 0;
    }
    .l-field-t50y8iv17088 {
        margin-bottom: 10px;
    }
    .l-field-row-t50y8iv17088,
    .l-field-grid-t50y8iv17088 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        margin-bottom: 10px;
    }
    .l-label-t50y8iv17088 {
        display: block;
        font-size: 12px;
        font-weight: 500;
        margin-bottom: 4px;
    }
    .l-required-t50y8iv17088 {
        color: var(--error-color);
    }
    .l-input-t50y8iv17088,
    .l-select-t50y8iv17088,
    .l-textarea-t50y8iv17088 {
        width: 100%;
        height: 28px;
        padding: 4px 8px;
        font-size: 13px;
        font-family: inherit;
        color: var(--text-primary);
        background-color: var(--bg-menu);
        border: 1px solid var(--border-color);
        outline: none;
    }
    .l-input-t50y8iv17088:focus,
    .l-select-t50y8iv17088:focus,
    .l-textarea-t50y8iv17088:focus {
        border-color: var(--focus-color);
    }
    .l-input-t50y8iv17088:disabled,
    .l-select-t50y8iv17088:disabled,
    .l-textarea-t50y8iv17088:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
    .l-input-t50y8iv17088:read-only {
        opacity: 0.7;
    }
    .l-field-t50y8iv17088.l-field-error-t50y8iv17088 .l-input-t50y8iv17088,
    .l-field-t50y8iv17088.l-field-error-t50y8iv17088 .l-select-t50y8iv17088,
    .l-field-t50y8iv17088.l-field-error-t50y8iv17088 .l-textarea-t50y8iv17088 {
        border-color: var(--error-color);
    }
    .l-select-t50y8iv17088 {
        cursor: pointer;
        padding-right: 24px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10' viewBox='0 0 10 10'%3E%3Cpath fill='%23e0e0e0' d='M5 7L1 3h8z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 8px center;
        appearance: none;
    }
    .l-select-t50y8iv17088[multiple] {
        height: auto;
        background-image: none;
    }
    .l-textarea-t50y8iv17088 {
        height: auto;
        resize: vertical;
        min-height: 60px;
    }
    .l-radio-group-t50y8iv17088 {
        display: flex;
        gap: 12px;
    }
    .l-radio-t50y8iv17088,
    .l-checkbox-t50y8iv17088 {
        display: inline-flex;
        align-items: center;
        cursor: pointer;
        font-size: 13px;
        margin-bottom: 6px;
    }
    .l-radio-t50y8iv17088 input,
    .l-checkbox-t50y8iv17088 input {
        margin: 0 6px 0 0;
        cursor: pointer;
    }
    .l-toggle-t50y8iv17088 {
        display: inline-flex;
        align-items: center;
        cursor: pointer;
    }
    .l-toggle-t50y8iv17088 input {
        display: none;
    }
    .l-toggle-slider-t50y8iv17088 {
        position: relative;
        width: 36px;
        height: 18px;
        background-color: var(--border-color);
        border-radius: 9px;
        transition: background-color 0.2s;
    }
    .l-toggle-slider-t50y8iv17088::before {
        content: "";
        position: absolute;
        width: 14px;
        height: 14px;
        left: 2px;
        top: 2px;
        background-color: var(--text-primary);
        border-radius: 50%;
        transition: transform 0.2s;
    }
    .l-toggle-t50y8iv17088 input:checked + .l-toggle-slider-t50y8iv17088 {
        background-color: var(--focus-color);
    }
    .l-toggle-t50y8iv17088 input:checked + .l-toggle-slider-t50y8iv17088::before {
        transform: translateX(18px);
    }
    .l-toggle-label-t50y8iv17088 {
        margin-left: 8px;
    }
    .l-file-t50y8iv17088 {
        font-size: 13px;
        color: var(--text-primary);
    }
    .l-file-t50y8iv17088::file-selector-button {
        padding: 4px 10px;
        font-size: 13px;
        font-family: inherit;
        color: var(--text-primary);
        background-color: var(--bg-menu);
        border: 1px solid var(--border-color);
        cursor: pointer;
        margin-right: 8px;
    }
    .l-color-t50y8iv17088 {
        width: 50px;
        height: 28px;
        padding: 2px;
        border: 1px solid var(--border-color);
        background-color: var(--bg-menu);
        cursor: pointer;
    }
    .l-range-t50y8iv17088 {
        width: 100%;
        height: 4px;
        background-color: var(--border-color);
        outline: none;
        cursor: pointer;
        appearance: none;
    }
    .l-range-t50y8iv17088::-webkit-slider-thumb {
        width: 14px;
        height: 14px;
        background-color: var(--focus-color);
        border-radius: 50%;
        cursor: pointer;
        appearance: none;
    }
    .l-range-t50y8iv17088::-moz-range-thumb {
        width: 14px;
        height: 14px;
        background-color: var(--focus-color);
        border-radius: 50%;
        cursor: pointer;
        border: none;
    }
    .l-help-t50y8iv17088 {
        font-size: 11px;
        color: #999;
        margin-top: 3px;
        display: none;
    }
    .l-field-t50y8iv17088 .l-help-t50y8iv17088 {
        display: block;
    }
    .l-error-t50y8iv17088 {
        font-size: 11px;
        color: var(--error-color);
        margin-top: 3px;
        display: none;
    }
    .l-field-t50y8iv17088.l-field-error-t50y8iv17088 .l-error-t50y8iv17088 {
        display: block;
    }
    .l-form-actions-t50y8iv17088 {
        margin-top: 16px;
        padding-top: 16px;
        border-top: 1px solid var(--border-color);
        display: flex;
        gap: 8px;
    }
    .l-btn-t50y8iv17088 {
        padding: 6px 16px;
        font-size: 13px;
        font-family: inherit;
        font-weight: 500;
        border: 1px solid var(--border-color);
        cursor: pointer;
    }
    .l-btn-primary-t50y8iv17088 {
        background-color: var(--focus-color);
        color: white;
        border-color: var(--focus-color);
    }
    .l-btn-secondary-t50y8iv17088 {
        background-color: var(--bg-menu);
        color: var(--text-primary);
    }    
</style>
<!-- message -->
<style>
    .l-container-o3rq5doqn23p {
        max-width: 999px;
        margin: 0 auto;
    }

    .l-header-o3rq5doqn23p {
        background: var(--bg-header);
        border-bottom: 1px solid var(--border-color);
        padding: 12px 20px;
    }

    .l-header-o3rq5doqn23p h1 {
        font-size: 16px;
        font-weight: 600;
    }

    .l-content-o3rq5doqn23p {
        padding: 20px;
    }

    .l-section-o3rq5doqn23p {
        margin-bottom: 30px;
    }

    .l-section-o3rq5doqn23p h2 {
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 12px;
        color: var(--text-muted);
    }

    .l-message-o3rq5doqn23p {
        display: flex;
        align-items: flex-start;
        background: #1e1e1e;
        border: 1px solid var(--border-color);
        border-left: 3px solid var(--border-color);
        padding: 8px 12px;
        margin-bottom: 8px;
    }

    .l-message-icon-o3rq5doqn23p {
        width: 16px;
        height: 16px;
        margin-right: 10px;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .l-message-icon-o3rq5doqn23p::before {
        content: "●";
        font-size: 12px;
    }

    .l-message-content-o3rq5doqn23p {
        flex: 1;
    }

    .l-message-title-o3rq5doqn23p {
        font-weight: 600;
        font-size: 13px;
        margin-bottom: 2px;
    }

    .l-message-text-o3rq5doqn23p {
        font-size: 13px;
        color: var(--text-muted);
    }

    .l-message-close-o3rq5doqn23p {
        background: none;
        border: none;
        color: var(--text-muted);
        cursor: pointer;
        font-size: 20px;
        line-height: 1;
        padding: 0;
        width: 20px;
        height: 20px;
        margin-left: 10px;
        flex-shrink: 0;
    }

    .l-message-close-o3rq5doqn23p:hover {
        color: var(--text-primary);
    }

    .l-message-success-o3rq5doqn23p {
        border-left-color: var(--success-color);
    }

    .l-message-success-o3rq5doqn23p .l-message-icon-o3rq5doqn23p::before {
        color: var(--success-color);
    }

    .l-message-success-o3rq5doqn23p .l-message-title-o3rq5doqn23p {
        color: var(--success-color);
    }

    .l-message-error-o3rq5doqn23p {
        border-left-color: var(--error-color);
    }

    .l-message-error-o3rq5doqn23p .l-message-icon-o3rq5doqn23p::before {
        color: var(--error-color);
    }

    .l-message-error-o3rq5doqn23p .l-message-title-o3rq5doqn23p {
        color: var(--error-color);
    }

    .l-message-warning-o3rq5doqn23p {
        border-left-color: var(--warning-color);
    }

    .l-message-warning-o3rq5doqn23p .l-message-icon-o3rq5doqn23p::before {
        color: var(--warning-color);
    }

    .l-message-warning-o3rq5doqn23p .l-message-title-o3rq5doqn23p {
        color: var(--warning-color);
    }

    .l-message-info-o3rq5doqn23p {
        border-left-color: var(--info-color);
    }

    .l-message-info-o3rq5doqn23p .l-message-icon-o3rq5doqn23p::before {
        color: var(--info-color);
    }

    .l-message-info-o3rq5doqn23p .l-message-title-o3rq5doqn23p {
        color: var(--info-color);
    }

    .l-message-banner-o3rq5doqn23p {
        border-radius: 0;
        border-left: none;
        border-right: none;
        border-top-width: 3px;
        margin-left: -20px;
        margin-right: -20px;
        padding: 10px 20px;
    }

    .l-message-compact-o3rq5doqn23p {
        padding: 6px 10px;
    }

    .l-message-compact-o3rq5doqn23p .l-message-icon-o3rq5doqn23p {
        width: 14px;
        height: 14px;
        margin-right: 8px;
    }

    .l-message-compact-o3rq5doqn23p .l-message-text-o3rq5doqn23p {
        font-size: 12px;
    }

    .l-message-field-o3rq5doqn23p {
        margin-top: 4px;
        padding: 4px 8px;
        background: transparent;
        border: none;
        border-left: 2px solid var(--border-color);
    }

    .l-message-field-o3rq5doqn23p .l-message-icon-o3rq5doqn23p {
        width: 12px;
        height: 12px;
        margin-right: 6px;
    }

    .l-message-field-o3rq5doqn23p .l-message-text-o3rq5doqn23p {
        font-size: 12px;
    }

    .l-message-inline-o3rq5doqn23p {
        display: inline-flex;
        padding: 4px 8px;
        margin: 0;
    }

    .l-message-inline-o3rq5doqn23p .l-message-icon-o3rq5doqn23p {
        width: 12px;
        height: 12px;
        margin-right: 6px;
    }

    .l-message-inline-o3rq5doqn23p .l-message-text-o3rq5doqn23p {
        font-size: 12px;
    }

    .l-form-group-o3rq5doqn23p {
        margin-bottom: 16px;
    }

    .l-form-label-o3rq5doqn23p {
        display: block;
        margin-bottom: 4px;
        font-size: 12px;
        color: var(--text-muted);
    }

    .l-form-input-o3rq5doqn23p {
        width: 100%;
        max-width: 400px;
        background: var(--bg-main);
        border: 1px solid var(--border-color);
        color: var(--text-primary);
        padding: 6px 8px;
        font-size: 13px;
    }

    .l-form-input-o3rq5doqn23p:focus {
        outline: none;
        border-color: var(--accent-color);
    }

    .l-form-input-error-o3rq5doqn23p {
        border-color: var(--error-color);
    }

    .l-form-input-success-o3rq5doqn23p {
        border-color: var(--success-color);
    }

    .l-btn-o3rq5doqn23p {
        background: var(--bg-header);
        border: 1px solid var(--border-color);
        color: var(--text-primary);
        padding: 6px 12px;
        font-size: 13px;
        cursor: pointer;
        margin-right: 8px;
    }

    .l-btn-o3rq5doqn23p:hover {
        background: #252525;
    }

    .l-toast-container-o3rq5doqn23p {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
        width: 320px;
    }

    .l-toast-o3rq5doqn23p {
        display: flex;
        align-items: flex-start;
        background: #1e1e1e;
        border: 1px solid var(--border-color);
        border-left: 3px solid var(--border-color);
        padding: 10px 12px;
        margin-bottom: 8px;
        opacity: 0;
        transition: opacity 0.2s;
    }

    .l-toast-o3rq5doqn23p.l-toast-show-o3rq5doqn23p {
        opacity: 1;
    }

    .l-toast-o3rq5doqn23p .l-message-icon-o3rq5doqn23p {
        width: 16px;
        height: 16px;
        margin-right: 10px;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .l-toast-o3rq5doqn23p .l-message-icon-o3rq5doqn23p::before {
        content: "●";
        font-size: 12px;
    }

    .l-toast-o3rq5doqn23p .l-message-content-o3rq5doqn23p {
        flex: 1;
    }

    .l-toast-o3rq5doqn23p .l-message-title-o3rq5doqn23p {
        font-weight: 600;
        font-size: 13px;
        margin-bottom: 2px;
    }

    .l-toast-o3rq5doqn23p .l-message-text-o3rq5doqn23p {
        font-size: 13px;
        color: var(--text-muted);
    }

    .l-toast-o3rq5doqn23p .l-message-close-o3rq5doqn23p {
        background: none;
        border: none;
        color: var(--text-muted);
        cursor: pointer;
        font-size: 20px;
        line-height: 1;
        padding: 0;
        width: 20px;
        height: 20px;
        margin-left: 10px;
        flex-shrink: 0;
    }

    .l-toast-o3rq5doqn23p .l-message-close-o3rq5doqn23p:hover {
        color: var(--text-primary);
    }

    .l-toast-o3rq5doqn23p.l-message-success-o3rq5doqn23p {
        border-left-color: var(--success-color);
    }

    .l-toast-o3rq5doqn23p.l-message-success-o3rq5doqn23p .l-message-icon-o3rq5doqn23p::before {
        color: var(--success-color);
    }

    .l-toast-o3rq5doqn23p.l-message-success-o3rq5doqn23p .l-message-title-o3rq5doqn23p {
        color: var(--success-color);
    }

    .l-toast-o3rq5doqn23p.l-message-error-o3rq5doqn23p {
        border-left-color: var(--error-color);
    }

    .l-toast-o3rq5doqn23p.l-message-error-o3rq5doqn23p .l-message-icon-o3rq5doqn23p::before {
        color: var(--error-color);
    }

    .l-toast-o3rq5doqn23p.l-message-error-o3rq5doqn23p .l-message-title-o3rq5doqn23p {
        color: var(--error-color);
    }

    .l-toast-o3rq5doqn23p.l-message-warning-o3rq5doqn23p {
        border-left-color: var(--warning-color);
    }

    .l-toast-o3rq5doqn23p.l-message-warning-o3rq5doqn23p .l-message-icon-o3rq5doqn23p::before {
        color: var(--warning-color);
    }

    .l-toast-o3rq5doqn23p.l-message-warning-o3rq5doqn23p .l-message-title-o3rq5doqn23p {
        color: var(--warning-color);
    }

    .l-toast-o3rq5doqn23p.l-message-info-o3rq5doqn23p {
        border-left-color: var(--info-color);
    }

    .l-toast-o3rq5doqn23p.l-message-info-o3rq5doqn23p .l-message-icon-o3rq5doqn23p::before {
        color: var(--info-color);
    }

    .l-toast-o3rq5doqn23p.l-message-info-o3rq5doqn23p .l-message-title-o3rq5doqn23p {
        color: var(--info-color);
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php if ($error = session()->getFlashdata('error')): ?>
    <div class="l-message-o3rq5doqn23p l-message-error-o3rq5doqn23p l-message-dismissible-o3rq5doqn23p">
        <div class="l-message-content-o3rq5doqn23p">
            <div class="l-message-text-o3rq5doqn23p">
                <?= $error ?>
            </div>
        </div>
        <button class="l-message-close-o3rq5doqn23p">×</button>
    </div>
<?php endif; ?>
<?php if ($success = session()->getFlashdata('success')): ?>
    <div class="l-message-o3rq5doqn23p l-message-success-o3rq5doqn23p l-message-dismissible-o3rq5doqn23p">
        <div class="l-message-content-o3rq5doqn23p">
            <div class="l-message-text-o3rq5doqn23p">
                <?= $success ?>
            </div>
        </div>
        <button class="l-message-close-o3rq5doqn23p">×</button>
    </div>
<?php endif; ?>
<form method="post" action="/admin/teams/create" class="l-form-t50y8iv17088">
    <?php csrf_token() ?>
    <div class="l-section-title-t50y8iv17088">Team Information</div>
    <div class="l-field-t50y8iv17088">
        <label class="l-label-t50y8iv17088">Team Name
            <span class="l-required-t50y8iv17088">*</span></label>
        <div class="l-control-t50y8iv17088">
            <input
                type="text"
                class="l-input-t50y8iv17088"
                name="name"
                required />
        </div>
        <div class="l-help-t50y8iv17088">
            Enter a unique and descriptive name for the team
        </div>
    </div>
    <div class="l-field-t50y8iv17088">
        <label class="l-label-t50y8iv17088">Description </label>
        <div class="l-control-t50y8iv17088">
            <textarea
                class="l-textarea-t50y8iv17088"
                name="description"
                rows="4"></textarea>
        </div>
        <div class="l-help-t50y8iv17088">
            Optional short description about the team's purpose
        </div>
    </div>

    <div class="l-form-actions-t50y8iv17088">
        <button
            type="submit"
            class="l-btn-t50y8iv17088 l-btn-primary-t50y8iv17088">
            Submit
        </button>
        <button
            type="button"
            class="l-btn-t50y8iv17088 l-btn-secondary-t50y8iv17088">
            Cancel
        </button>
    </div>
</form>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const closeButtons = document.querySelectorAll('.l-message-close-o3rq5doqn23p');
        closeButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const message = this.closest('.l-message-o3rq5doqn23p');
                if (message) {
                    message.style.display = 'none';
                }
            });
        });
    });

    function showToast(type, title, text) {
        const container = document.getElementById('toastContainer-o3rq5doqn23p');

        const toast = document.createElement('div');
        toast.className = 'l-toast-o3rq5doqn23p l-message-' + type + '-o3rq5doqn23p';

        const icon = document.createElement('div');
        icon.className = 'l-message-icon-o3rq5doqn23p';

        const content = document.createElement('div');
        content.className = 'l-message-content-o3rq5doqn23p';

        const titleEl = document.createElement('div');
        titleEl.className = 'l-message-title-o3rq5doqn23p';
        titleEl.textContent = title;

        const textEl = document.createElement('div');
        textEl.className = 'l-message-text-o3rq5doqn23p';
        textEl.textContent = text;

        const closeBtn = document.createElement('button');
        closeBtn.className = 'l-message-close-o3rq5doqn23p';
        closeBtn.textContent = '×';
        closeBtn.addEventListener('click', function() {
            toast.style.opacity = '0';
            setTimeout(function() {
                toast.remove();
            }, 200);
        });

        content.appendChild(titleEl);
        content.appendChild(textEl);

        toast.appendChild(icon);
        toast.appendChild(content);
        toast.appendChild(closeBtn);

        container.appendChild(toast);

        setTimeout(function() {
            toast.classList.add('l-toast-show-o3rq5doqn23p');
        }, 10);

        setTimeout(function() {
            toast.style.opacity = '0';
            setTimeout(function() {
                toast.remove();
            }, 200);
        }, 3000);
    }
</script>
<?= $this->endSection() ?>