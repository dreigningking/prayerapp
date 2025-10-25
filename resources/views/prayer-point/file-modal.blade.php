<!-- File View Modal -->
<div class="file-modal" id="fileModal">
    <div class="file-modal-content">
        <div class="file-modal-header">
            <h5 class="file-modal-title" id="fileModalTitle"></h5>
            <button class="file-modal-close" id="fileModalClose">&times;</button>
        </div>
        <div class="file-modal-body" id="fileModalBody">
            <!-- File content will be loaded here -->
        </div>
    </div>
</div>
@push('scripts')
<script>
    function viewFile(filePath, title) {
        // Set modal title
        $('#fileModalTitle').text('Attached File - ' + title);

        // Determine file type and display content
        const fileUrl = '/storage/' + filePath;
        const fileExtension = filePath.split('.').pop().toLowerCase();

        let content = '';

        if (['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'].includes(fileExtension)) {
            // Display image
            content = '<img src="' + fileUrl + '" alt="' + title + '" class="file-image">';
        } else if (fileExtension === 'pdf') {
            // Display PDF
            content = '<embed src="' + fileUrl + '" type="application/pdf" class="file-pdf">';
        } else {
            // Unsupported file type
            content = '<div class="text-center"><p>Unsupported file type</p><a href="' + fileUrl + '" target="_blank" class="btn btn-primary">Download File</a></div>';
        }

        // Set modal content
        $('#fileModalBody').html(content);

        // Show modal
        $('#fileModal').addClass('active');
    }
</script>
@endpush
@push('styles')
<style>
    /* File View Modal */
    .file-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 1100;
        justify-content: center;
        align-items: center;
    }

    .file-modal.active {
        display: flex;
    }

    .file-modal-content {
        background: white;
        border-radius: 12px;
        padding: 20px;
        max-width: 90vw;
        max-height: 90vh;
        position: relative;
        overflow: hidden;
    }

    .file-modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
        padding-bottom: 12px;
        border-bottom: 1px solid #eee;
    }

    .file-modal-title {
        margin: 0;
        font-size: 18px;
        font-weight: 600;
        color: #333;
    }

    .file-modal-close {
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        color: #666;
        padding: 0;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: background 0.2s;
    }

    .file-modal-close:hover {
        background: #f8f9fa;
        color: #333;
    }

    .file-modal-body {
        max-height: 70vh;
        overflow: auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .file-image {
        max-width: 100%;
        max-height: 100%;
        border-radius: 8px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .file-pdf {
        width: 100%;
        height: 600px;
        border: none;
        border-radius: 8px;
    }
</style>
@endpush