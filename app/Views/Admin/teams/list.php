<?= $this->extend('Layouts/admin') ?>

<?= $this->section('css') ?>
<!-- listing -->
<style>
    .l-body-ab5tjmurbovg {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        background: var(--bg-main);
        color: var(--text-primary);
        font-size: 13px;
        width: 999px;
        margin: 0 auto;
    }
    .l-listing-ab5tjmurbovg {
        max-width: 999px;
        margin: 0 auto;
    }
    .l-listing-header-ab5tjmurbovg {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: var(--bg-header);
        border: 1px solid var(--border-color);
        padding: 10px 12px;
        margin-bottom: 1px;
    }
    .l-listing-title-ab5tjmurbovg h1 {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 2px;
    }
    .l-subtitle-ab5tjmurbovg {
        font-size: 12px;
        color: var(--text-muted);
    }
    .l-btn-ab5tjmurbovg {
        background: var(--bg-header);
        color: var(--text-primary);
        border: 1px solid var(--border-color);
        padding: 4px 10px;
        font-size: 13px;
        cursor: pointer;
        border-radius: 2px;
        text-decoration: none;
    }
    .l-btn-ab5tjmurbovg:hover {
        background: #2a2a2a;
    }
    .l-btn-primary-ab5tjmurbovg {
        background: var(--accent-color);
        color: white;
        border-color: var(--accent-color);
    }
    .l-btn-primary-ab5tjmurbovg:hover {
        background: #2563eb;
    }
    .l-listing-toolbar-ab5tjmurbovg {
        display: flex;
        gap: 8px;
        align-items: center;
        background: var(--bg-toolbar);
        border: 1px solid var(--border-color);
        padding: 8px 12px;
        margin-bottom: 1px;
    }
    .l-search-ab5tjmurbovg {
        background: var(--bg-main);
        border: 1px solid var(--border-color);
        color: var(--text-primary);
        padding: 4px 8px;
        font-size: 13px;
        width: 220px;
        border-radius: 2px;
    }
    .l-select-ab5tjmurbovg {
        background: var(--bg-main);
        border: 1px solid var(--border-color);
        color: var(--text-primary);
        padding: 4px 8px;
        font-size: 13px;
        cursor: pointer;
        border-radius: 2px;
    }
    .l-result-count-ab5tjmurbovg {
        margin-left: auto;
        font-size: 12px;
        color: var(--text-muted);
    }
    .l-table-wrapper-ab5tjmurbovg {
        border: 1px solid var(--border-color);
        overflow-x: auto;
        overflow-y: hidden;
    }
    .l-table-ab5tjmurbovg {
        width: max-content;     /* 👈 important */
        min-width: 100%;        /* ensures normal layout when small */
        border-collapse: collapse;
        background: var(--bg-table);
    }
    .l-table-ab5tjmurbovg thead {
        position: sticky;
        top: 0;
        background: var(--bg-header);
        z-index: 10;
    }
    .l-table-ab5tjmurbovg th {
        text-align: left;
        padding: 6px 10px;
        font-weight: 600;
        font-size: 13px;
        border-bottom: 1px solid var(--border-color);
    }
    .l-table-ab5tjmurbovg td {
        padding: 6px 10px;
        font-size: 13px;
        border-bottom: 1px solid var(--border-color);
    }
    .l-row-ab5tjmurbovg:hover {
        background: #222;
    }
    .l-row-ab5tjmurbovg.l-hidden-ab5tjmurbovg {
        display: none;
    }
    .l-th-check-ab5tjmurbovg {
        width: 32px;
    }
    .l-th-sortable-ab5tjmurbovg {
        cursor: pointer;
    }
    .l-th-sortable-ab5tjmurbovg:hover {
        background: #252525;
    }
    .l-sort-indicator-ab5tjmurbovg {
        font-size: 10px;
        color: var(--text-muted);
        margin-left: 4px;
    }
    .l-th-actions-ab5tjmurbovg {
        width: 120px;
    }
    .l-td-actions-ab5tjmurbovg {
        white-space: nowrap;
    }
    .l-btn-link-ab5tjmurbovg {
        background: none;
        border: none;
        color: var(--accent-color);
        cursor: pointer;
        padding: 0 6px;
        font-size: 13px;
    }
    .l-btn-link-ab5tjmurbovg:hover {
        text-decoration: underline;
    }
    .l-btn-danger-ab5tjmurbovg {
        color: #ef4444;
    }
    .l-badge-ab5tjmurbovg {
        display: inline-block;
        padding: 2px 8px;
        font-size: 11px;
        border-radius: 2px;
        font-weight: 500;
    }
    .l-badge-active-ab5tjmurbovg {
        background: #16a34a;
        color: white;
    }
    .l-badge-inactive-ab5tjmurbovg {
        background: #6b7280;
        color: white;
    }
    .l-badge-pending-ab5tjmurbovg {
        background: #f59e0b;
        color: white;
    }
    .l-pagination-ab5tjmurbovg {
        display: flex;
        gap: 4px;
        align-items: center;
        background: var(--bg-header);
        border: 1px solid var(--border-color);
        padding: 8px 12px;
        margin-top: 1px;
    }
    .l-page-btn-ab5tjmurbovg {
        background: var(--bg-main);
        border: 1px solid var(--border-color);
        color: var(--text-primary);
        padding: 4px 10px;
        font-size: 13px;
        cursor: pointer;
        border-radius: 2px;
        transition: background 0.2s;
    }
    .l-page-btn-ab5tjmurbovg:hover {
        background: #2a2a2a;
    }
    .l-page-btn-ab5tjmurbovg:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
    .l-page-active-ab5tjmurbovg {
        background: var(--accent-color);
        border-color: var(--accent-color);
        color: white;
    }
    .l-page-active-ab5tjmurbovg:hover {
        background: #2563eb;
    }
    .l-total-records-ab5tjmurbovg {
        margin-left: auto;
        font-size: 12px;
        color: var(--text-muted);
    }
    .l-state-ab5tjmurbovg {
        text-align: center;
        padding: 10px;
        background: var(--bg-header);
        border: 1px solid var(--border-color);
        margin-top: 1px;
    }
    .l-state-ab5tjmurbovg h3 {
        font-size: 14px;
        margin-bottom: 4px;
    }
    .l-state-ab5tjmurbovg p {
        color: var(--text-muted);
        font-size: 12px;
        margin-bottom: 0;
    }
    /* Webkit Browsers (Chrome, Edge, Safari) */
    .l-table-wrapper-ab5tjmurbovg::-webkit-scrollbar {
        height: 6px;   /* 👈 small horizontal scrollbar */
    }

    .l-table-wrapper-ab5tjmurbovg::-webkit-scrollbar-track {
        background: #111;
    }

    .l-table-wrapper-ab5tjmurbovg::-webkit-scrollbar-thumb {
        background: #333;
        border-radius: 10px;
    }

    .l-table-wrapper-ab5tjmurbovg::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
    .l-table-wrapper-ab5tjmurbovg::-webkit-scrollbar {
        height: 4px;
    }    
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="l-listing-ab5tjmurbovg">

    <div class="l-listing-header-ab5tjmurbovg">
        <div class="l-listing-title-ab5tjmurbovg">
            <h1>Teams</h1>
            <span class="l-subtitle-ab5tjmurbovg">All teams listing</span>
        </div>

        <div class="l-listing-actions-ab5tjmurbovg">
            <a href="/admin/teams/create" class="l-btn-ab5tjmurbovg l-btn-primary-ab5tjmurbovg" id="create_user_button-ab5tjmurbovg">Create Teams</a>
            <button class="l-btn-ab5tjmurbovg l-btn-primary-ab5tjmurbovg" id="export_data_button-ab5tjmurbovg">Export data</button>
        </div>
    </div>

    <div class="l-listing-toolbar-ab5tjmurbovg">
        <input type="text" class="l-search-ab5tjmurbovg" id="searchInput-ab5tjmurbovg" placeholder="Search users...">
        <select class="l-select-ab5tjmurbovg" id="bulkActions-ab5tjmurbovg">
            <option value="">Bulk Actions</option>
            <option value="delete">Delete Selected</option>
            <option value="export">Export Selected</option>
        </select>
        <span class="l-result-count-ab5tjmurbovg">
            Showing <span id="resultCount-ab5tjmurbovg">2</span> results
        </span>
    </div>

    <div class="l-table-wrapper-ab5tjmurbovg">
        <table class="l-table-ab5tjmurbovg">
            <thead>
                <tr>
                    <th class="l-th-check-ab5tjmurbovg">
                        <input type="checkbox" id="selectAll-ab5tjmurbovg">
                    </th>
                    <th class="l-th-sortable-ab5tjmurbovg">ID</th>
                    <th class="l-th-sortable-ab5tjmurbovg">Name</th>
                    <th class="l-th-sortable-ab5tjmurbovg">Description</th>
                    <th class="l-th-sortable-ab5tjmurbovg">Created At</th>
                    <th class="l-th-sortable-ab5tjmurbovg">Updated At</th>
                    <th class="l-th-actions-ab5tjmurbovg">Actions</th>

                </tr>
            </thead>
            <tbody id="tableBody-ab5tjmurbovg">
                <?php if (!empty($teams)): ?>
                    <?php foreach ($teams as $team): ?>
                        <tr class="l-row-ab5tjmurbovg">
                            <td>
                                <input 
                                    type="checkbox" 
                                    class="l-row-check-ab5tjmurbovg" 
                                    data-id="<?= esc($team['id']) ?>"
                                >
                            </td>
                            <td><?= esc($team['id']) ?></td>
                            <td><?= esc($team['name']) ?></td>
                            <td><?= esc($team['description']) ?></td>
                            <td><?= esc($team['created_at']) ?></td>
                            <td><?= esc($team['updated_at']) ?></td>
                            <td class="l-td-actions-ab5tjmurbovg">
                                <a href="<?= base_url('admin/teams/members/' . $team['id']) ?>" class="l-btn-link-ab5tjmurbovg">
                                    Members
                                </a>

                                <form action="<?= base_url('admin/users/delete/' . $team['id']) ?>" method="post" style="display:inline;">
                                    <?= csrf_field() ?>
                                    <button 
                                        type="submit" 
                                        class="l-btn-link-ab5tjmurbovg l-btn-danger-ab5tjmurbovg"
                                        onclick="return confirm('Are you sure you want to delete this user?')"
                                    >
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9" style="text-align:center;">No teams found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="l-pagination-ab5tjmurbovg">
        <button class="l-page-btn-ab5tjmurbovg l-page-prev-ab5tjmurbovg">Previous</button>
        <button class="l-page-btn-ab5tjmurbovg l-page-active-ab5tjmurbovg">1</button>
        <button class="l-page-btn-ab5tjmurbovg">2</button>
        <button class="l-page-btn-ab5tjmurbovg">3</button>
        <button class="l-page-btn-ab5tjmurbovg">4</button>
        <button class="l-page-btn-ab5tjmurbovg">5</button>
        <button class="l-page-btn-ab5tjmurbovg">6</button>
        <button class="l-page-btn-ab5tjmurbovg l-page-next-ab5tjmurbovg">Next</button>
        <span class="l-total-records-ab5tjmurbovg">
            Total: <span id="totalRecords-ab5tjmurbovg">55</span> records
        </span>
    </div>
    <div class="l-state-ab5tjmurbovg l-state-no-results-ab5tjmurbovg" style="display:none;">
        <h3>No results found</h3>
        <p>No data is found buddy!!</p>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const selectAllCheckbox = document.getElementById('selectAll-ab5tjmurbovg');
    const rowCheckboxes = document.querySelectorAll('.l-row-check-ab5tjmurbovg');
    const searchInput = document.getElementById('searchInput-ab5tjmurbovg');
    const bulkActions = document.getElementById('bulkActions-ab5tjmurbovg');
    const tableBody = document.getElementById('tableBody-ab5tjmurbovg');
    const resultCount = document.getElementById('resultCount-ab5tjmurbovg');
    const totalRecords = document.getElementById('totalRecords-ab5tjmurbovg');
    const pageButtons = document.querySelectorAll('.l-page-btn-ab5tjmurbovg:not(.l-page-prev-ab5tjmurbovg):not(.l-page-next-ab5tjmurbovg)');
    const prevButton = document.querySelector('.l-page-prev-ab5tjmurbovg');
    const nextButton = document.querySelector('.l-page-next-ab5tjmurbovg');
    const exportDataButton = document.getElementById('export_data_button-ab5tjmurbovg');
    
    // Pagination settings
    const rowsPerPage = 10;
    let currentPage = 1;
    let allRows = Array.from(tableBody.querySelectorAll('.l-row-ab5tjmurbovg'));
    
    // Select all functionality
    selectAllCheckbox.addEventListener('change', function() {
        const visibleCheckboxes = Array.from(rowCheckboxes).filter(cb => {
            const row = cb.closest('.l-row-ab5tjmurbovg');
            return !row.classList.contains('l-hidden-ab5tjmurbovg');
        });
        visibleCheckboxes.forEach(checkbox => {
            checkbox.checked = selectAllCheckbox.checked;
        });
    });
    
    // Individual checkbox functionality
    rowCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const visibleCheckboxes = Array.from(rowCheckboxes).filter(cb => {
                const row = cb.closest('.l-row-ab5tjmurbovg');
                return !row.classList.contains('l-hidden-ab5tjmurbovg');
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
        allRows.forEach(row => row.classList.add('l-hidden-ab5tjmurbovg'));
        
        // Get the no results state element
        const noResultsState = document.querySelector('.l-state-no-results-ab5tjmurbovg');
        const tableWrapper = document.querySelector('.l-table-wrapper-ab5tjmurbovg');
        const pagination = document.querySelector('.l-pagination-ab5tjmurbovg');        
        
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
        
        rowsToShow.forEach(row => row.classList.remove('l-hidden-ab5tjmurbovg'));
        
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
            btn.classList.toggle('l-page-active-ab5tjmurbovg', pageNum === currentPage);
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
        const headerCells = document.querySelectorAll('.l-table-ab5tjmurbovg thead th');
        const headers = [];
        const headerIndices = [];
        
        headerCells.forEach((th, index) => {
            // Skip checkbox column and actions column
            if (!th.classList.contains('l-th-check-ab5tjmurbovg') && !th.classList.contains('l-th-actions-ab5tjmurbovg')) {
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
        const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
        const link = document.createElement('a');
        const url = URL.createObjectURL(blob);
        
        const timestamp = new Date().toISOString().replace(/[:.]/g, '-').slice(0, -5);
        link.setAttribute('href', url);
        link.setAttribute('download', `export_${timestamp}.csv`);
        link.style.visibility = 'hidden';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        
        alert(`Successfully exported ${allRows.length} Teams(s)`);
    });

    // Export selected to CSV
    function exportSelected(ids) {
        
        const rows = [];
        
        // Parse headers from table (excluding checkbox and actions columns)
        const headerCells = document.querySelectorAll('.l-table-ab5tjmurbovg thead th');
        const headers = [];
        const headerIndices = [];
        
        headerCells.forEach((th, index) => {
            // Skip checkbox column and actions column
            if (!th.classList.contains('l-th-check-ab5tjmurbovg') && !th.classList.contains('l-th-actions-ab5tjmurbovg')) {
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
                const row = checkbox.closest('.l-row-ab5tjmurbovg');
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
        const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
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
<?= $this->endSection() ?>