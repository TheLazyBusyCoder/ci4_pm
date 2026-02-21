<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
</head>

<body>
    <div class="l-container-achvu5b1trbh">
        <form class="l-form-achvu5b1trbh">
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
</body>

</html>