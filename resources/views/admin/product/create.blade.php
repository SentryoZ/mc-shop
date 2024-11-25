<x-layouts.admin>
    <x-slot:title>
        Products
    </x-slot>
    <div class="container">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row pt-3">
                <div class="col-lg-8">
                    <div class="border rounded-3 p-3">
                        <h2>General Information</h2>
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="border rounded-3 p-3 mt-3">
                        <h2>Product Pricing</h2>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-dollar-sign"></i></span>
                                <input type="number" class="form-control" id="price" name="price" step="0.01"
                                    required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="border rounded-3 p-3 mt-3">
                                <h2>Commands</h2>
                                <div id="commands-container">
                                    <!-- Initial command input -->
                                    <div class="mb-3 command-group">
                                        <label for="commands" class="form-label">Command 1</label>
                                        <div class="input-group">
                                            <span class="input-group-text">/</span>
                                            <input type="text" class="form-control" name="commands[]"
                                                placeholder="Ex: give %player% oak_log 16" required>
                                            <button type="button" class="btn btn-danger btn-remove-command"
                                                style="display: none;">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary" id="add-command">
                                    <i class="fa-solid fa-plus"></i> Add Another Command
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="border rounded-3 p-3">
                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" class="form-control" id="image" name="image" required>

                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary w-100">Create Product</button>
                </div>
        </form>
    </div>

</x-layouts.admin>

<script>
    let commandCount = 1;

    document.getElementById('add-command').addEventListener('click', function() {
        commandCount++;

        const container = document.getElementById('commands-container');
        const newCommandGroup = document.createElement('div');
        newCommandGroup.className = 'mb-3 command-group';

        newCommandGroup.innerHTML = `
            <label for="commands" class="form-label">Command ${commandCount}</label>
            <div class="input-group">
                <span class="input-group-text">/</span>
                <input type="text" 
                       class="form-control" 
                       name="commands[]" 
                       placeholder="give %player% diamond_sword 1"
                       required>
                <button type="button" class="btn btn-danger btn-remove-command">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>
        `;

        container.appendChild(newCommandGroup);

        // Show all remove buttons if there's more than one command
        if (commandCount > 1) {
            document.querySelectorAll('.btn-remove-command').forEach(btn => {
                btn.style.display = 'block';
            });
        }
    });

    // Event delegation for remove buttons
    document.getElementById('commands-container').addEventListener('click', function(e) {
        if (e.target.closest('.btn-remove-command')) {
            e.target.closest('.command-group').remove();
            commandCount--;

            // Hide all remove buttons if only one command remains
            if (commandCount === 1) {
                document.querySelectorAll('.btn-remove-command').forEach(btn => {
                    btn.style.display = 'none';
                });
            }

            // Update labels
            document.querySelectorAll('.command-group').forEach((group, index) => {
                group.querySelector('label').textContent = `Command ${index + 1}`;
            });
        }
    });
</script>
