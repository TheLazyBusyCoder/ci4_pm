<?= $this->extend('Layouts/manager') ?>

<?= $this->section('css') ?>
<style>
    .l-tabs-container-nxn7obp41rtw {
        max-width: 999px;
        margin: 0 auto 20px;
    }

    .l-tabs-strip-nxn7obp41rtw {
        background: var(--bg-toolbar);
        border-bottom: 1px solid var(--border-color);
        display: flex;
    }

    .l-tab-nxn7obp41rtw {
        padding: 4px 10px;
        font-size: 13px;
        cursor: pointer;
        color: var(--text-muted);
        background: var(--bg-toolbar);
        border: none;
        border-right: 1px solid var(--border-color);
        border-bottom: 2px solid transparent;
        outline: none;
    }

    .l-tab-nxn7obp41rtw:last-child {
        border-right: none;
    }

    .l-tab-nxn7obp41rtw:hover {
        color: var(--text-primary);
    }

    .l-tab-nxn7obp41rtw.active-nxn7obp41rtw {
        background: var(--bg-main);
        border-bottom: 2px solid var(--accent-color);
        color: var(--text-primary);
    }

    .l-tab-nxn7obp41rtw:focus-visible {
        outline: 1px solid var(--accent-color);
        outline-offset: -1px;
    }

    .l-tabs-content-nxn7obp41rtw {
        background: var(--bg-main);
        padding: 10px;
        font-size: 13px;
    }

    .l-tab-pane-nxn7obp41rtw {
        display: none;
    }

    .l-tab-pane-nxn7obp41rtw.active-nxn7obp41rtw {
        display: block;
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
<!-- listing -->
<style>
    .l-body-z3aejvs2syr0 {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        background: var(--bg-main);
        color: var(--text-primary);
        font-size: 13px;
        width: 999px;
        margin: 0 auto;
    }

    .l-listing-z3aejvs2syr0 {
        max-width: 999px;
        margin: 0 auto;
    }

    .l-listing-header-z3aejvs2syr0 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: var(--bg-header);
        border: 1px solid var(--border-color);
        padding: 10px 12px;
        margin-bottom: 1px;
    }

    .l-listing-title-z3aejvs2syr0 h1 {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 2px;
    }

    .l-subtitle-z3aejvs2syr0 {
        font-size: 12px;
        color: var(--text-muted);
    }

    .l-btn-z3aejvs2syr0 {
        background: var(--bg-header);
        color: var(--text-primary);
        border: 1px solid var(--border-color);
        padding: 4px 10px;
        font-size: 13px;
        cursor: pointer;
        border-radius: 2px;
    }

    .l-btn-z3aejvs2syr0:hover {
        background: #2a2a2a;
    }

    .l-btn-primary-z3aejvs2syr0 {
        background: var(--accent-color);
        color: white;
        border-color: var(--accent-color);
    }

    .l-btn-primary-z3aejvs2syr0:hover {
        background: #2563eb;
    }

    .l-listing-toolbar-z3aejvs2syr0 {
        display: flex;
        gap: 8px;
        align-items: center;
        background: var(--bg-toolbar);
        border: 1px solid var(--border-color);
        padding: 8px 12px;
        margin-bottom: 1px;
    }

    .l-search-z3aejvs2syr0 {
        background: var(--bg-main);
        border: 1px solid var(--border-color);
        color: var(--text-primary);
        padding: 4px 8px;
        font-size: 13px;
        width: 220px;
        border-radius: 2px;
    }

    .l-select-z3aejvs2syr0 {
        background: var(--bg-main);
        border: 1px solid var(--border-color);
        color: var(--text-primary);
        padding: 4px 8px;
        font-size: 13px;
        cursor: pointer;
        border-radius: 2px;
    }

    .l-result-count-z3aejvs2syr0 {
        margin-left: auto;
        font-size: 12px;
        color: var(--text-muted);
    }

    .l-table-wrapper-z3aejvs2syr0 {
        border: 1px solid var(--border-color);
        overflow-x: auto;
        overflow-y: hidden;
    }

    .l-table-z3aejvs2syr0 {
        width: max-content;
        /* 👈 important */
        min-width: 100%;
        /* ensures normal layout when small */
        border-collapse: collapse;
        background: var(--bg-table);
    }

    .l-table-z3aejvs2syr0 thead {
        position: sticky;
        top: 0;
        background: var(--bg-header);
        z-index: 10;
    }

    .l-table-z3aejvs2syr0 th {
        text-align: left;
        padding: 6px 10px;
        font-weight: 600;
        font-size: 13px;
        border-bottom: 1px solid var(--border-color);
    }

    .l-table-z3aejvs2syr0 td {
        padding: 6px 10px;
        font-size: 13px;
        border-bottom: 1px solid var(--border-color);
    }

    .l-row-z3aejvs2syr0:hover {
        background: #222;
    }

    .l-row-z3aejvs2syr0.l-hidden-z3aejvs2syr0 {
        display: none;
    }

    .l-th-check-z3aejvs2syr0 {
        width: 32px;
    }

    .l-th-sortable-z3aejvs2syr0 {
        cursor: pointer;
    }

    .l-th-sortable-z3aejvs2syr0:hover {
        background: #252525;
    }

    .l-sort-indicator-z3aejvs2syr0 {
        font-size: 10px;
        color: var(--text-muted);
        margin-left: 4px;
    }

    .l-th-actions-z3aejvs2syr0 {
        width: 120px;
    }

    .l-td-actions-z3aejvs2syr0 {
        white-space: nowrap;
    }

    .l-btn-link-z3aejvs2syr0 {
        background: none;
        border: none;
        color: var(--accent-color);
        cursor: pointer;
        padding: 0 6px;
        font-size: 13px;
    }

    .l-btn-link-z3aejvs2syr0:hover {
        text-decoration: underline;
    }

    .l-btn-danger-z3aejvs2syr0 {
        color: #ef4444;
    }

    .l-badge-z3aejvs2syr0 {
        display: inline-block;
        padding: 2px 8px;
        font-size: 11px;
        border-radius: 2px;
        font-weight: 500;
    }

    .l-badge-active-z3aejvs2syr0 {
        background: #16a34a;
        color: white;
    }

    .l-badge-inactive-z3aejvs2syr0 {
        background: #6b7280;
        color: white;
    }

    .l-badge-pending-z3aejvs2syr0 {
        background: #f59e0b;
        color: white;
    }

    .l-pagination-z3aejvs2syr0 {
        display: flex;
        gap: 4px;
        align-items: center;
        background: var(--bg-header);
        border: 1px solid var(--border-color);
        padding: 8px 12px;
        margin-top: 1px;
    }

    .l-page-btn-z3aejvs2syr0 {
        background: var(--bg-main);
        border: 1px solid var(--border-color);
        color: var(--text-primary);
        padding: 4px 10px;
        font-size: 13px;
        cursor: pointer;
        border-radius: 2px;
        transition: background 0.2s;
    }

    .l-page-btn-z3aejvs2syr0:hover {
        background: #2a2a2a;
    }

    .l-page-btn-z3aejvs2syr0:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .l-page-active-z3aejvs2syr0 {
        background: var(--accent-color);
        border-color: var(--accent-color);
        color: white;
    }

    .l-page-active-z3aejvs2syr0:hover {
        background: #2563eb;
    }

    .l-total-records-z3aejvs2syr0 {
        margin-left: auto;
        font-size: 12px;
        color: var(--text-muted);
    }

    .l-state-z3aejvs2syr0 {
        text-align: center;
        padding: 10px;
        background: var(--bg-header);
        border: 1px solid var(--border-color);
        margin-top: 1px;
    }

    .l-state-z3aejvs2syr0 h3 {
        font-size: 14px;
        margin-bottom: 4px;
    }

    .l-state-z3aejvs2syr0 p {
        color: var(--text-muted);
        font-size: 12px;
        margin-bottom: 0;
    }

    /* Webkit Browsers (Chrome, Edge, Safari) */
    .l-table-wrapper-z3aejvs2syr0::-webkit-scrollbar {
        height: 6px;
        /* 👈 small horizontal scrollbar */
    }

    .l-table-wrapper-z3aejvs2syr0::-webkit-scrollbar-track {
        background: #111;
    }

    .l-table-wrapper-z3aejvs2syr0::-webkit-scrollbar-thumb {
        background: #333;
        border-radius: 10px;
    }

    .l-table-wrapper-z3aejvs2syr0::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .l-table-wrapper-z3aejvs2syr0::-webkit-scrollbar {
        height: 4px;
    }
</style>
<!-- team details -->
<style>
    .l-container-cisjv4s20ekt {
        max-width: 999px;
        margin: 0 auto;
        padding: 20px;
    }

    .l-view-header-cisjv4s20ekt {
        padding: 16px 0;
    }

    .l-view-title-cisjv4s20ekt {
        margin: 0 0 8px 0;
        font-size: 20px;
        font-weight: 600;
        color: var(--text-primary);
        line-height: 1.3;
    }

    .l-view-description-cisjv4s20ekt {
        margin: 0;
        font-size: 13px;
        color: var(--text-muted);
        line-height: 1.5;
    }

    .l-divider-cisjv4s20ekt {
        height: 1px;
        background-color: var(--border-color);
        margin: 0 0 20px 0;
    }

    .l-section-cisjv4s20ekt {
        margin-bottom: 24px;
    }

    .l-section-title-cisjv4s20ekt {
        margin: 0 0 16px 0;
        font-size: 15px;
        font-weight: 600;
        color: var(--text-primary);
    }

    .l-kv-grid-cisjv4s20ekt {
        border-top: 1px solid var(--border-color);
    }

    .l-kv-row-cisjv4s20ekt {
        display: grid;
        grid-template-columns: 33% 67%;
        border-bottom: 1px solid var(--border-color);
        padding: 10px 0;
    }

    .l-kv-key-cisjv4s20ekt {
        font-size: 13px;
        color: var(--text-muted);
        padding-right: 16px;
    }

    .l-kv-value-cisjv4s20ekt {
        font-size: 13px;
        color: var(--text-primary);
        word-wrap: break-word;
    }

    .l-kv-success-cisjv4s20ekt {
        color: var(--success-color);
    }

    .l-kv-error-cisjv4s20ekt {
        color: var(--error-color);
    }

    .l-kv-warning-cisjv4s20ekt {
        color: var(--warning-color);
    }

    .l-kv-info-cisjv4s20ekt {
        color: var(--info-color);
    }
</style>
<!-- form -->
<style>
    .l-form-u6vv7z05dfyh {
        background-color: var(--bg-nav);
        padding: 20px;
        border: 1px solid var(--border-color);
        max-width: 400px;
    }
    .l-section-title-u6vv7z05dfyh {
        font-size: 14px;
        font-weight: 600;
        margin: 16px 0 10px 0;
        padding-bottom: 6px;
        border-bottom: 1px solid var(--border-color);
    }
    .l-section-title-u6vv7z05dfyh:first-child {
        margin-top: 0;
    }
    .l-field-u6vv7z05dfyh {
        margin-bottom: 10px;
    }
    .l-field-row-u6vv7z05dfyh,
    .l-field-grid-u6vv7z05dfyh {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        margin-bottom: 10px;
    }
    .l-label-u6vv7z05dfyh {
        display: block;
        font-size: 12px;
        font-weight: 500;
        margin-bottom: 4px;
    }
    .l-required-u6vv7z05dfyh {
        color: var(--error-color);
    }
    .l-input-u6vv7z05dfyh,
    .l-select-u6vv7z05dfyh,
    .l-textarea-u6vv7z05dfyh {
        width: 100%;
        height: 28px;
        padding: 4px 8px;
        font-size: 13px;
        font-family: inherit;
        border: 1px solid var(--border-color);
        outline: none;
    }
    .l-input-u6vv7z05dfyh:focus,
    .l-select-u6vv7z05dfyh:focus,
    .l-textarea-u6vv7z05dfyh:focus {
        border-color: var(--focus-color);
    }
    .l-input-u6vv7z05dfyh:disabled,
    .l-select-u6vv7z05dfyh:disabled,
    .l-textarea-u6vv7z05dfyh:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
    .l-input-u6vv7z05dfyh:read-only {
        opacity: 0.7;
    }
    .l-field-u6vv7z05dfyh.l-field-error-u6vv7z05dfyh .l-input-u6vv7z05dfyh,
    .l-field-u6vv7z05dfyh.l-field-error-u6vv7z05dfyh .l-select-u6vv7z05dfyh,
    .l-field-u6vv7z05dfyh.l-field-error-u6vv7z05dfyh .l-textarea-u6vv7z05dfyh {
        border-color: var(--error-color);
    }
    .l-select-u6vv7z05dfyh {
        cursor: pointer;
        padding-right: 24px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10' viewBox='0 0 10 10'%3E%3Cpath fill='%23e0e0e0' d='M5 7L1 3h8z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 8px center;
        appearance: none;
    }
    .l-select-u6vv7z05dfyh[multiple] {
        height: auto;
        background-image: none;
    }
    .l-textarea-u6vv7z05dfyh {
        height: auto;
        resize: vertical;
        min-height: 60px;
    }
    .l-radio-group-u6vv7z05dfyh {
        display: flex;
        gap: 12px;
    }
    .l-radio-u6vv7z05dfyh,
    .l-checkbox-u6vv7z05dfyh {
        display: inline-flex;
        align-items: center;
        cursor: pointer;
        font-size: 13px;
        margin-bottom: 6px;
    }
    .l-radio-u6vv7z05dfyh input,
    .l-checkbox-u6vv7z05dfyh input {
        margin: 0 6px 0 0;
        cursor: pointer;
    }
    .l-toggle-u6vv7z05dfyh {
        display: inline-flex;
        align-items: center;
        cursor: pointer;
    }
    .l-toggle-u6vv7z05dfyh input {
        display: none;
    }
    .l-toggle-slider-u6vv7z05dfyh {
        position: relative;
        width: 36px;
        height: 18px;
        background-color: var(--border-color);
        border-radius: 9px;
        transition: background-color 0.2s;
    }
    .l-toggle-slider-u6vv7z05dfyh::before {
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
    .l-toggle-u6vv7z05dfyh input:checked + .l-toggle-slider-u6vv7z05dfyh {
        background-color: var(--focus-color);
    }
    .l-toggle-u6vv7z05dfyh input:checked + .l-toggle-slider-u6vv7z05dfyh::before {
        transform: translateX(18px);
    }
    .l-toggle-label-u6vv7z05dfyh {
        margin-left: 8px;
    }
    .l-file-u6vv7z05dfyh {
        font-size: 13px;
        color: var(--text-primary);
    }
    .l-file-u6vv7z05dfyh::file-selector-button {
        padding: 4px 10px;
        font-size: 13px;
        font-family: inherit;
        color: var(--text-primary);
        background-color: var(--bg-menu);
        border: 1px solid var(--border-color);
        cursor: pointer;
        margin-right: 8px;
    }
    .l-color-u6vv7z05dfyh {
        width: 50px;
        height: 28px;
        padding: 2px;
        border: 1px solid var(--border-color);
        background-color: var(--bg-menu);
        cursor: pointer;
    }
    .l-range-u6vv7z05dfyh {
        width: 100%;
        height: 4px;
        background-color: var(--border-color);
        outline: none;
        cursor: pointer;
        appearance: none;
    }
    .l-range-u6vv7z05dfyh::-webkit-slider-thumb {
        width: 14px;
        height: 14px;
        background-color: var(--focus-color);
        border-radius: 50%;
        cursor: pointer;
        appearance: none;
    }
    .l-range-u6vv7z05dfyh::-moz-range-thumb {
        width: 14px;
        height: 14px;
        background-color: var(--focus-color);
        border-radius: 50%;
        cursor: pointer;
        border: none;
    }
    .l-help-u6vv7z05dfyh {
        font-size: 11px;
        color: #999;
        margin-top: 3px;
        display: none;
    }
    .l-field-u6vv7z05dfyh .l-help-u6vv7z05dfyh {
        display: block;
    }
    .l-error-u6vv7z05dfyh {
        font-size: 11px;
        color: var(--error-color);
        margin-top: 3px;
        display: none;
    }
    .l-field-u6vv7z05dfyh.l-field-error-u6vv7z05dfyh .l-error-u6vv7z05dfyh {
        display: block;
    }
    .l-form-actions-u6vv7z05dfyh {
        margin-top: 16px;
        padding-top: 16px;
        border-top: 1px solid var(--border-color);
        display: flex;
        gap: 8px;
    }
    .l-btn-u6vv7z05dfyh {
        padding: 6px 16px;
        font-size: 13px;
        font-family: inherit;
        font-weight: 500;
        border: 1px solid var(--border-color);
        cursor: pointer;
    }
    .l-btn-primary-u6vv7z05dfyh {
        background-color: var(--focus-color);
        color: white;
        border-color: var(--focus-color);
    }
    .l-btn-secondary-u6vv7z05dfyh {
        background-color: var(--bg-menu);
        color: var(--text-primary);
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
<div class="l-tabs-container-nxn7obp41rtw">
    <div class="l-tabs-strip-nxn7obp41rtw">

        <button class="l-tab-nxn7obp41rtw active-nxn7obp41rtw" data-tab="Team">
            Team details
        </button>

        <button
            class="l-tab-nxn7obp41rtw "
            data-tab="Team members">
            Team members
        </button>

        <button class="l-tab-nxn7obp41rtw" data-tab="Tasks">
            Tasks
        </button>
        <button class="l-tab-nxn7obp41rtw" data-tab="Create Task">
            Create Task
        </button>


    </div>

    <div class="l-tabs-content-nxn7obp41rtw">
        <div class="l-tab-pane-nxn7obp41rtw active-nxn7obp41rtw" data-pane="Team">
            <div class="l-section-cisjv4s20ekt">
                <h2 class="l-section-title-cisjv4s20ekt">Team details</h2>
                <div class="l-kv-grid-cisjv4s20ekt">
                    <div class="l-kv-row-cisjv4s20ekt">
                        <div class="l-kv-key-cisjv4s20ekt">Team Name</div>
                        <div class="l-kv-value-cisjv4s20ekt"><?= $team['name'] ?></div>
                    </div>

                    <div class="l-kv-row-cisjv4s20ekt">
                        <div class="l-kv-key-cisjv4s20ekt">
                            Team description
                        </div>
                        <div class="l-kv-value-cisjv4s20ekt"><?= $team['description'] ?></div>
                    </div>

                    <div class="l-kv-row-cisjv4s20ekt">
                        <div class="l-kv-key-cisjv4s20ekt">
                            Created <a href="tel:+"></a>
                        </div>
                        <div class="l-kv-value-cisjv4s20ekt"><?= $team['created_at'] ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="l-tab-pane-nxn7obp41rtw "
            data-pane="Team members">
            <div class="l-listing-z3aejvs2syr0">
                <div class="l-listing-header-z3aejvs2syr0">
                    <div class="l-listing-title-z3aejvs2syr0">
                        <h1>Team members</h1>
                        <span class="l-subtitle-z3aejvs2syr0">This are the team members.</span>
                    </div>

                    <div class="l-listing-actions-z3aejvs2syr0">
                        <button
                            class="l-btn-z3aejvs2syr0 l-btn-primary-z3aejvs2syr0"
                            id="export_data_button-z3aejvs2syr0">
                            Export data
                        </button>
                    </div>
                </div>

                <div class="l-listing-toolbar-z3aejvs2syr0">
                    <input
                        type="text"
                        class="l-search-z3aejvs2syr0"
                        id="searchInput-z3aejvs2syr0"
                        placeholder="Search users..." />
                    <select
                        class="l-select-z3aejvs2syr0"
                        id="bulkActions-z3aejvs2syr0">
                        <option value="">Bulk Actions</option>
                        <option value="delete">Delete Selected</option>
                        <option value="export">Export Selected</option>
                    </select>
                    <span class="l-result-count-z3aejvs2syr0">
                        Showing <span id="resultCount-z3aejvs2syr0">2</span> results
                    </span>
                </div>

                <div class="l-table-wrapper-z3aejvs2syr0">
                    <table class="l-table-z3aejvs2syr0">
                        <thead>
                            <tr>
                                <th class="l-th-check-z3aejvs2syr0">
                                    <input
                                        type="checkbox"
                                        id="selectAll-z3aejvs2syr0" />
                                </th>
                                <th class="l-th-sortable-z3aejvs2syr0">ID</th>
                                <th class="l-th-sortable-z3aejvs2syr0">Name</th>
                                <th class="l-th-sortable-z3aejvs2syr0">Email</th>
                                <th class="l-th-sortable-z3aejvs2syr0">Role</th>
                                <th class="l-th-sortable-z3aejvs2syr0">
                                    Active Status
                                </th>
                                <th class="l-th-sortable-z3aejvs2syr0">
                                    Joined at
                                </th>
                                <th class="l-th-actions-z3aejvs2syr0">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody-z3aejvs2syr0">
                            <?php if (!empty($employees)): ?>
                                <?php foreach ($employees as $employee): ?>
                                    <tr class="l-row-z3aejvs2syr0">
                                        <td>
                                            <input
                                                type="checkbox"
                                                class="l-row-check-z3aejvs2syr0"
                                                data-id="<?= esc($employee['id']) ?>"
                                                </td>
                                        <td><?= esc($employee['id']) ?></td>
                                        <td><?= esc($employee['name']) ?></td>
                                        <td><?= esc($employee['email']) ?></td>
                                        <td><?= esc($employee['role']) ?></td>
                                        <td><?= !empty($employee['is_active']) ? 'Active' : 'Inactive' ?></td>
                                        <td><?= esc($employee['joined_at']) ?></td>
                                        <td class="l-td-actions-z3aejvs2syr0">
                                            <a href="" class="l-btn-link-z3aejvs2syr0">View</a>
                                            <a href="" class="l-btn-link-z3aejvs2syr0">Edit</a>
                                            <form
                                                action=""
                                                method="post"
                                                style="display: inline">
                                                <button
                                                    type="submit"
                                                    class="l-btn-link-z3aejvs2syr0 l-btn-danger-z3aejvs2syr0">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="l-pagination-z3aejvs2syr0">
                    <button
                        class="l-page-btn-z3aejvs2syr0 l-page-prev-z3aejvs2syr0">
                        Previous
                    </button>
                    <button
                        class="l-page-btn-z3aejvs2syr0 l-page-active-z3aejvs2syr0">
                        1
                    </button>
                    <button class="l-page-btn-z3aejvs2syr0">2</button>
                    <button class="l-page-btn-z3aejvs2syr0">3</button>
                    <button class="l-page-btn-z3aejvs2syr0">4</button>
                    <button class="l-page-btn-z3aejvs2syr0">5</button>
                    <button class="l-page-btn-z3aejvs2syr0">6</button>

                    <button
                        class="l-page-btn-z3aejvs2syr0 l-page-next-z3aejvs2syr0">
                        Next
                    </button>
                    <span class="l-total-records-z3aejvs2syr0">
                        Total:
                        <span id="totalRecords-z3aejvs2syr0">55</span> records
                    </span>
                </div>

                <div
                    class="l-state-z3aejvs2syr0 l-state-no-results-z3aejvs2syr0"
                    style="display: none">
                    <h3>No results found</h3>
                    <p>No data is found buddy!!</p>
                </div>
            </div>
        </div>
        <div class="l-tab-pane-nxn7obp41rtw" data-pane="Tasks">
            Tasks
        </div>
        <div class="l-tab-pane-nxn7obp41rtw" data-pane="Create Task">
            <form class="l-form-u6vv7z05dfyh">
                <div class="l-section-title-u6vv7z05dfyh">Task Details</div>
                <div class="l-field-u6vv7z05dfyh">
                    <label class="l-label-u6vv7z05dfyh">Task Title
                        <span class="l-required-u6vv7z05dfyh">*</span></label>
                    <div class="l-control-u6vv7z05dfyh">
                        <input
                            type="text"
                            class="l-input-u6vv7z05dfyh"
                            name="title"
                            required />
                    </div>
                    <div class="l-help-u6vv7z05dfyh">
                        Enter a short and clear task title
                    </div>
                </div>
                <div class="l-field-u6vv7z05dfyh">
                    <label class="l-label-u6vv7z05dfyh">Description </label>
                    <div class="l-control-u6vv7z05dfyh">
                        <textarea
                            class="l-textarea-u6vv7z05dfyh"
                            name="description"
                            rows="4"></textarea>
                    </div>
                    <div class="l-help-u6vv7z05dfyh">
                        Provide detailed information about the task
                    </div>
                </div>
                <div class="l-field-u6vv7z05dfyh">
                    <label class="l-label-u6vv7z05dfyh">Priority
                        <span class="l-required-u6vv7z05dfyh">*</span></label>
                    <div class="l-control-u6vv7z05dfyh">
                        <select
                            class="l-select-u6vv7z05dfyh"
                            name="priority"
                            required>
                            <option value="">Select an option</option>
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="high">High</option>
                        </select>
                    </div>
                </div>
                <div class="l-field-u6vv7z05dfyh">
                    <label class="l-label-u6vv7z05dfyh">Due Date </label>
                    <div class="l-control-u6vv7z05dfyh">
                        <input
                            type="datetime-local"
                            class="l-input-u6vv7z05dfyh"
                            name="due_date" />
                    </div>
                    <div class="l-help-u6vv7z05dfyh">
                        Select deadline for this task
                    </div>
                </div>
                <div class="l-field-u6vv7z05dfyh">
                    <label class="l-label-u6vv7z05dfyh">
                        Assign To
                        <span class="l-required-u6vv7z05dfyh">*</span>
                    </label>

                    <div class="l-control-u6vv7z05dfyh">
                        <select
                            class="l-select-u6vv7z05dfyh"
                            name="assignee_id"
                            required>

                            <option value="">Select an option</option>

                            <?php if (!empty($employees)): ?>
                                <?php foreach ($employees as $employee): ?>
                                    <?php if ($employee['is_active']): ?>
                                        <option value="<?= esc($employee['id']) ?>">
                                            <?= esc($employee['name']) ?> (<?= esc($employee['email']) ?>)
                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>

                        </select>
                    </div>
                    <div class="l-help-u6vv7z05dfyh">
                        Select an employee from the selected team
                    </div>
                </div> 
                <div class="l-form-actions-u6vv7z05dfyh">
                    <button
                        type="submit"
                        class="l-btn-u6vv7z05dfyh l-btn-primary-u6vv7z05dfyh">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script>
    document.querySelectorAll('.l-tabs-container-nxn7obp41rtw').forEach(container => {
        const tabs = container.querySelectorAll('.l-tab-nxn7obp41rtw');
        const panes = container.querySelectorAll('.l-tab-pane-nxn7obp41rtw');

        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                const target = tab.getAttribute('data-tab');

                tabs.forEach(t => t.classList.remove('active-nxn7obp41rtw'));
                panes.forEach(p => p.classList.remove('active-nxn7obp41rtw'));

                tab.classList.add('active-nxn7obp41rtw');
                container.querySelector(`[data-pane="${target}"]`).classList.add('active-nxn7obp41rtw');
            });

            tab.addEventListener('keydown', (e) => {
                let newIndex = index;

                if (e.key === 'ArrowRight') {
                    e.preventDefault();
                    newIndex = (index + 1) % tabs.length;
                } else if (e.key === 'ArrowLeft') {
                    e.preventDefault();
                    newIndex = (index - 1 + tabs.length) % tabs.length;
                } else if (e.key === 'Enter') {
                    e.preventDefault();
                    tab.click();
                    return;
                } else {
                    return;
                }

                tabs[newIndex].focus();
                tabs[newIndex].click();
            });
        });
    });
</script>
<!-- message -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Elements
        const selectAllCheckbox = document.getElementById('selectAll-z3aejvs2syr0');
        const rowCheckboxes = document.querySelectorAll('.l-row-check-z3aejvs2syr0');
        const searchInput = document.getElementById('searchInput-z3aejvs2syr0');
        const bulkActions = document.getElementById('bulkActions-z3aejvs2syr0');
        const tableBody = document.getElementById('tableBody-z3aejvs2syr0');
        const resultCount = document.getElementById('resultCount-z3aejvs2syr0');
        const totalRecords = document.getElementById('totalRecords-z3aejvs2syr0');
        const pageButtons = document.querySelectorAll('.l-page-btn-z3aejvs2syr0:not(.l-page-prev-z3aejvs2syr0):not(.l-page-next-z3aejvs2syr0)');
        const prevButton = document.querySelector('.l-page-prev-z3aejvs2syr0');
        const nextButton = document.querySelector('.l-page-next-z3aejvs2syr0');
        const exportDataButton = document.getElementById('export_data_button-z3aejvs2syr0');

        // Pagination settings
        const rowsPerPage = 10;
        let currentPage = 1;
        let allRows = Array.from(tableBody.querySelectorAll('.l-row-z3aejvs2syr0'));

        // Select all functionality
        selectAllCheckbox.addEventListener('change', function() {
            const visibleCheckboxes = Array.from(rowCheckboxes).filter(cb => {
                const row = cb.closest('.l-row-z3aejvs2syr0');
                return !row.classList.contains('l-hidden-z3aejvs2syr0');
            });
            visibleCheckboxes.forEach(checkbox => {
                checkbox.checked = selectAllCheckbox.checked;
            });
        });

        // Individual checkbox functionality
        rowCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const visibleCheckboxes = Array.from(rowCheckboxes).filter(cb => {
                    const row = cb.closest('.l-row-z3aejvs2syr0');
                    return !row.classList.contains('l-hidden-z3aejvs2syr0');
                });
                const allChecked = visibleCheckboxes.every(cb => cb.checked);
                selectAllCheckbox.checked = allChecked && visibleCheckboxes.length > 0;
            });
        });

        // Filter and display rows
        function filterAndDisplayRows() {
            const searchTerm = searchInput.value.toLowerCase();

            let filteredRows = allRows.filter(row => {
                const text = row.textContent.toLowerCase();
                const matchesSearch = text.includes(searchTerm);
                return matchesSearch;
            });

            // Hide all rows first
            allRows.forEach(row => row.classList.add('l-hidden-z3aejvs2syr0'));

            // Get the no results state element
            const noResultsState = document.querySelector('.l-state-no-results-z3aejvs2syr0');
            const tableWrapper = document.querySelector('.l-table-wrapper-z3aejvs2syr0');
            const pagination = document.querySelector('.l-pagination-z3aejvs2syr0');

            // Check if there are any filtered rows
            if (filteredRows.length === 0) {
                // Show no results message
                noResultsState.style.display = 'block';
                tableWrapper.style.display = 'none';
                pagination.style.display = 'none';

                // Update counts to 0
                totalRecords.textContent = '0';
                resultCount.textContent = '0';

                // Uncheck select all
                selectAllCheckbox.checked = false;

                return; // Exit early
            }

            // Hide no results message and show table
            noResultsState.style.display = 'none';
            tableWrapper.style.display = 'block';
            pagination.style.display = 'flex';

            // Update total count
            totalRecords.textContent = filteredRows.length;

            // Calculate pagination
            const totalPages = Math.ceil(filteredRows.length / rowsPerPage);
            currentPage = Math.min(currentPage, Math.max(1, totalPages));

            // Show only rows for current page
            const startIndex = (currentPage - 1) * rowsPerPage;
            const endIndex = startIndex + rowsPerPage;
            const rowsToShow = filteredRows.slice(startIndex, endIndex);

            rowsToShow.forEach(row => row.classList.remove('l-hidden-z3aejvs2syr0'));

            // Update result count
            resultCount.textContent = rowsToShow.length;

            // Update pagination buttons
            updatePaginationButtons(totalPages);

            // Uncheck select all
            selectAllCheckbox.checked = false;
        }

        // Update pagination buttons
        function updatePaginationButtons(totalPages) {
            // Update page number buttons
            pageButtons.forEach((btn, index) => {
                const pageNum = index + 1;
                btn.classList.toggle('l-page-active-z3aejvs2syr0', pageNum === currentPage);
                btn.style.display = pageNum <= totalPages ? '' : 'none';
            });

            // Update prev/next buttons
            prevButton.disabled = currentPage === 1;
            nextButton.disabled = currentPage >= totalPages || totalPages === 0;
        }

        // Search functionality
        searchInput.addEventListener('input', function() {
            currentPage = 1;
            filterAndDisplayRows();
        });

        // Pagination - numbered page buttons
        pageButtons.forEach((button, index) => {
            button.addEventListener('click', function() {
                currentPage = index + 1;
                filterAndDisplayRows();
            });
        });

        // Previous button
        prevButton.addEventListener('click', function() {
            if (currentPage > 1) {
                currentPage--;
                filterAndDisplayRows();
            }
        });

        // Next button
        nextButton.addEventListener('click', function() {
            const totalPages = Math.ceil(parseInt(totalRecords.textContent) / rowsPerPage);
            if (currentPage < totalPages) {
                currentPage++;
                filterAndDisplayRows();
            }
        });

        // Bulk actions
        bulkActions.addEventListener('change', function() {
            const action = this.value;
            if (!action) return;

            const selectedCheckboxes = Array.from(rowCheckboxes).filter(cb => cb.checked);
            const selectedIds = selectedCheckboxes.map(cb => cb.getAttribute('data-id'));

            if (selectedIds.length === 0) {
                alert('Please select at least one item');
                this.value = '';
                return;
            }

            if (action === 'delete') {
                if (confirm(`Are you sure you want to delete ${selectedIds.length} item(s)?`)) {
                    deleteSelected(selectedIds);
                }
            } else if (action === 'export') {
                exportSelected(selectedIds);
            } else if (action === 'activate') {
                activateSelected(selectedIds);
            }

            this.value = '';
        });

        // Delete selected (POST request)
        function deleteSelected(ids) {
            console.log('Deleting IDs:', ids);
        }

        exportDataButton.addEventListener('click', function() {

            const rows = [];

            // Parse headers from table (excluding checkbox and actions columns)
            const headerCells = document.querySelectorAll('.l-table-z3aejvs2syr0 thead th');
            const headers = [];
            const headerIndices = [];

            headerCells.forEach((th, index) => {
                // Skip checkbox column and actions column
                if (!th.classList.contains('l-th-check-z3aejvs2syr0') && !th.classList.contains('l-th-actions-z3aejvs2syr0')) {
                    // Get text content and remove sort indicators
                    let headerText = th.textContent.replace(/[↕↑↓]/g, '').trim();
                    headers.push(headerText);
                    headerIndices.push(index);
                }
            });

            rows.push(headers.join(','));

            // Get all rows (regardless of filters or pagination)
            allRows.forEach(row => {
                const cells = row.querySelectorAll('td');
                const rowData = [];

                headerIndices.forEach(index => {
                    let cellText = cells[index].textContent.trim();
                    // Quote fields that might contain commas
                    if (cellText.includes(',')) {
                        cellText = `"${cellText}"`;
                    }
                    rowData.push(cellText);
                });

                rows.push(rowData.join(','));
            });

            const csvContent = rows.join('\n');
            const blob = new Blob([csvContent], {
                type: 'text/csv;charset=utf-8;'
            });
            const link = document.createElement('a');
            const url = URL.createObjectURL(blob);

            const timestamp = new Date().toISOString().replace(/[:.]/g, '-').slice(0, -5);
            link.setAttribute('href', url);
            link.setAttribute('download', `export_${timestamp}.csv`);
            link.style.visibility = 'hidden';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);

            alert(`Successfully exported ${allRows.length} user(s)`);
        });

        // Export selected to CSV
        function exportSelected(ids) {

            const rows = [];

            // Parse headers from table (excluding checkbox and actions columns)
            const headerCells = document.querySelectorAll('.l-table-z3aejvs2syr0 thead th');
            const headers = [];
            const headerIndices = [];

            headerCells.forEach((th, index) => {
                // Skip checkbox column and actions column
                if (!th.classList.contains('l-th-check-z3aejvs2syr0') && !th.classList.contains('l-th-actions-z3aejvs2syr0')) {
                    // Get text content and remove sort indicators
                    let headerText = th.textContent.replace(/[↕↑↓]/g, '').trim();
                    headers.push(headerText);
                    headerIndices.push(index);
                }
            });

            rows.push(headers.join(','));

            ids.forEach(id => {
                const checkbox = document.querySelector(`[data-id="${id}"]`);
                if (checkbox) {
                    const row = checkbox.closest('.l-row-z3aejvs2syr0');
                    const cells = row.querySelectorAll('td');
                    const rowData = [];

                    headerIndices.forEach(index => {
                        let cellText = cells[index].textContent.trim();
                        // Quote fields that might contain commas
                        if (cellText.includes(',')) {
                            cellText = `"${cellText}"`;
                        }
                        rowData.push(cellText);
                    });

                    rows.push(rowData.join(','));
                }
            });

            const csvContent = rows.join('\n');
            const blob = new Blob([csvContent], {
                type: 'text/csv;charset=utf-8;'
            });
            const link = document.createElement('a');
            const url = URL.createObjectURL(blob);

            link.setAttribute('href', url);
            link.setAttribute('download', `export_${Date.now()}.csv`);
            link.style.visibility = 'hidden';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);

            alert(`Successfully exported ${ids.length} user(s)`);
        }

        // Initial display
        filterAndDisplayRows();
    });
</script>
<!-- team details -->
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