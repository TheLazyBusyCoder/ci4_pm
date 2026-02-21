<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- form -->
    <style>
        :root {
            --border-color: #2a2a2a;
            --bg-main: #1a1a1a;
            --bg-header: #1e1e1e;
            --bg-toolbar: #1e1e1e;
            --bg-table: #1a1a1a;
            --text-primary: #e0e0e0;
            --text-muted: #888;
            --accent-color: #3b82f6;
            --focus-color: #3b82f6;
            --error-color: #ef4444;
        }
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            padding: 20px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            font-size: 13px;
            line-height: 1.4;
            color: var(--text-primary);
            background-color: var(--bg-main);
        }
        .l-container-achvu5b1trbh {
            max-width: 500px;
            margin: 0 auto;
        }
        .l-form-achvu5b1trbh {
            background-color: var(--bg-nav);
            padding: 20px;
            border: 1px solid var(--border-color);
        }
        .l-section-title-achvu5b1trbh {
            font-size: 14px;
            font-weight: 600;
            margin: 16px 0 10px 0;
            padding-bottom: 6px;
            border-bottom: 1px solid var(--border-color);
        }
        .l-section-title-achvu5b1trbh:first-child {
            margin-top: 0;
        }
        .l-field-achvu5b1trbh {
            margin-bottom: 10px;
        }
        .l-field-row-achvu5b1trbh,
        .l-field-grid-achvu5b1trbh {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 10px;
        }
        .l-label-achvu5b1trbh {
            display: block;
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 4px;
        }
        .l-required-achvu5b1trbh {
            color: var(--error-color);
        }
        .l-input-achvu5b1trbh,
        .l-select-achvu5b1trbh,
        .l-textarea-achvu5b1trbh {
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
        .l-input-achvu5b1trbh:focus,
        .l-select-achvu5b1trbh:focus,
        .l-textarea-achvu5b1trbh:focus {
            border-color: var(--focus-color);
        }
        .l-input-achvu5b1trbh:disabled,
        .l-select-achvu5b1trbh:disabled,
        .l-textarea-achvu5b1trbh:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
        .l-input-achvu5b1trbh:read-only {
            opacity: 0.7;
        }
        .l-field-achvu5b1trbh.l-field-error-achvu5b1trbh .l-input-achvu5b1trbh,
        .l-field-achvu5b1trbh.l-field-error-achvu5b1trbh .l-select-achvu5b1trbh,
        .l-field-achvu5b1trbh.l-field-error-achvu5b1trbh .l-textarea-achvu5b1trbh {
            border-color: var(--error-color);
        }
        .l-select-achvu5b1trbh {
            cursor: pointer;
            padding-right: 24px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10' viewBox='0 0 10 10'%3E%3Cpath fill='%23e0e0e0' d='M5 7L1 3h8z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 8px center;
            appearance: none;
        }
        .l-select-achvu5b1trbh[multiple] {
            height: auto;
            background-image: none;
        }
        .l-textarea-achvu5b1trbh {
            height: auto;
            resize: vertical;
            min-height: 60px;
        }
        .l-radio-group-achvu5b1trbh {
            display: flex;
            gap: 12px;
        }
        .l-radio-achvu5b1trbh,
        .l-checkbox-achvu5b1trbh {
            display: inline-flex;
            align-items: center;
            cursor: pointer;
            font-size: 13px;
            margin-bottom: 6px;
        }
        .l-radio-achvu5b1trbh input,
        .l-checkbox-achvu5b1trbh input {
            margin: 0 6px 0 0;
            cursor: pointer;
        }
        .l-toggle-achvu5b1trbh {
            display: inline-flex;
            align-items: center;
            cursor: pointer;
        }
        .l-toggle-achvu5b1trbh input {
            display: none;
        }
        .l-toggle-slider-achvu5b1trbh {
            position: relative;
            width: 36px;
            height: 18px;
            background-color: var(--border-color);
            border-radius: 9px;
            transition: background-color 0.2s;
        }
        .l-toggle-slider-achvu5b1trbh::before {
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
        .l-toggle-achvu5b1trbh input:checked + .l-toggle-slider-achvu5b1trbh {
            background-color: var(--focus-color);
        }
        .l-toggle-achvu5b1trbh input:checked + .l-toggle-slider-achvu5b1trbh::before {
            transform: translateX(18px);
        }
        .l-toggle-label-achvu5b1trbh {
            margin-left: 8px;
        }
        .l-file-achvu5b1trbh {
            font-size: 13px;
            color: var(--text-primary);
        }
        .l-file-achvu5b1trbh::file-selector-button {
            padding: 4px 10px;
            font-size: 13px;
            font-family: inherit;
            color: var(--text-primary);
            background-color: var(--bg-menu);
            border: 1px solid var(--border-color);
            cursor: pointer;
            margin-right: 8px;
        }
        .l-color-achvu5b1trbh {
            width: 50px;
            height: 28px;
            padding: 2px;
            border: 1px solid var(--border-color);
            background-color: var(--bg-menu);
            cursor: pointer;
        }
        .l-range-achvu5b1trbh {
            width: 100%;
            height: 4px;
            background-color: var(--border-color);
            outline: none;
            cursor: pointer;
            appearance: none;
        }
        .l-range-achvu5b1trbh::-webkit-slider-thumb {
            width: 14px;
            height: 14px;
            background-color: var(--focus-color);
            border-radius: 50%;
            cursor: pointer;
            appearance: none;
        }
        .l-range-achvu5b1trbh::-moz-range-thumb {
            width: 14px;
            height: 14px;
            background-color: var(--focus-color);
            border-radius: 50%;
            cursor: pointer;
            border: none;
        }
        .l-help-achvu5b1trbh {
            font-size: 11px;
            color: #999;
            margin-top: 3px;
            display: none;
        }
        .l-field-achvu5b1trbh .l-help-achvu5b1trbh {
            display: block;
        }
        .l-error-achvu5b1trbh {
            font-size: 11px;
            color: var(--error-color);
            margin-top: 3px;
            display: none;
        }
        .l-field-achvu5b1trbh.l-field-error-achvu5b1trbh .l-error-achvu5b1trbh {
            display: block;
        }
        .l-form-actions-achvu5b1trbh {
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px solid var(--border-color);
            display: flex;
            gap: 8px;
        }
        .l-btn-achvu5b1trbh {
            padding: 6px 16px;
            font-size: 13px;
            font-family: inherit;
            font-weight: 500;
            border: 1px solid var(--border-color);
            cursor: pointer;
        }
        .l-btn-primary-achvu5b1trbh {
            background-color: var(--focus-color);
            color: white;
            border-color: var(--focus-color);
        }
        .l-btn-secondary-achvu5b1trbh {
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

        .l-toast-o3rq5doqn23p.l-message-warning-o3rq5doqn23p{
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
</head>

<body>
    <div class="l-container-achvu5b1trbh">
    <!-- message -->
    <?php if ($error = session()->getFlashdata('error')): ?>
        <div class="l-message-o3rq5doqn23p l-message-error-o3rq5doqn23p l-message-dismissible-o3rq5doqn23p">
            <div class="l-message-icon-o3rq5doqn23p"></div>
            <div class="l-message-content-o3rq5doqn23p">
                <div class="l-message-title-o3rq5doqn23p">Error</div>
                <div class="l-message-text-o3rq5doqn23p">
                    <?= $error ?>
                </div>
            </div>
            <button class="l-message-close-o3rq5doqn23p">×</button>
        </div>
    <?php endif; ?>

    <!-- form -->
        <form class="l-form-achvu5b1trbh" method="post" action="/auth/login">
            <?php csrf_token() ?>
            <div class="l-field-achvu5b1trbh">
                <label class="l-label-achvu5b1trbh">Email Address <span class="l-required-achvu5b1trbh">*</span></label>
                <div class="l-control-achvu5b1trbh">
                    <input type="email" class="l-input-achvu5b1trbh" name="email" required>
                </div>
            </div>
            <div class="l-field-achvu5b1trbh">
                <label class="l-label-achvu5b1trbh">Password <span class="l-required-achvu5b1trbh">*</span></label>
                <div class="l-control-achvu5b1trbh">
                    <input type="password" class="l-input-achvu5b1trbh" name="password" required>
                </div>
            </div>
            <div class="l-field-achvu5b1trbh">
                <div class="l-control-achvu5b1trbh">
                    <label class="l-checkbox-achvu5b1trbh">
                        <input type="checkbox" name="remember">
                        <span>Remember Me </span>
                    </label>
                </div>
            </div>

            <div class="l-form-actions-achvu5b1trbh">
                <button type="submit" class="l-btn-achvu5b1trbh l-btn-primary-achvu5b1trbh">Submit</button>
                <button type="button" class="l-btn-achvu5b1trbh l-btn-secondary-achvu5b1trbh">Cancel</button>
            </div>
        </form>
    </div>

    <!-- message -->
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
</body>

</html>