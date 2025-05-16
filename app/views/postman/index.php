<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Testing Tool</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --dark-bg: #1a1a1a;
            --darker-bg: #141414;
            --border-color: #2d2d2d;
        }
        
        body {
            height:90vh;
            overflow-y: hidden;
            background-color: var(--dark-bg);
            color: #e0e0e0;
        }
        
        .sidebar {
            background-color: var(--darker-bg);
            border-right: 1px solid var(--border-color);
        }
        .sidebar .scrollable{
            height: 85vh;
            overflow-y: auto;
        }
        
        .form-control, .form-select {
            background-color: var(--darker-bg);
            border-color: var(--border-color);
            color: #e0e0e0;
        }
        
        .form-control:focus, .form-select:focus {
            background-color: var(--darker-bg);
            border-color: #0d6efd;
            color: #e0e0e0;
        }
        
        .textarea-container {
            height: calc(50vh - 200px);
        }
        
        textarea {
            font-family: monospace !important;
            resize: none;
        }
        
        .nav-tabs {
            border-bottom: 1px solid var(--border-color);
        }
        
        .nav-tabs .nav-link.active {
            background-color: var(--dark-bg);
            border-color: var(--border-color) var(--border-color) var(--dark-bg);
            color: #fff;
        }
        
        .nav-tabs .nav-link:not(.active) {
            color: #888;
        }
        
        .card {
            background-color: var(--darker-bg);
            border: 1px solid var(--border-color);
        }
        
        .response-section {
            background-color: var(--darker-bg) !important;
            border: 1px solid var(--border-color) !important;
        }

        .endpoint-group {
            margin-bottom: 15px;
        }

        .endpoint-group-title {
            color: #ffffff;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .endpoint-item {
            cursor: pointer;
            padding: 5px 10px;
            margin-bottom: 3px;
            background-color: var(--dark-bg);
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }

        .endpoint-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .endpoint-item .method {
            font-weight: bold;
            margin-right: 10px;
            display: inline-block;
            width: 60px;
        }
        .endpoint-item[data-method='GET'] .method{
            color:green;
        }
        .endpoint-item[data-method='POST'] .method{
            color:blue;
        }
        .endpoint-item[data-method='DELETE'] .method{
            color:red;
        }
        .endpoint-item[data-method='PUT'] .method{
            color:orange;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row vh-100">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar p-3">

                <h4 class="text-light">Endpoints</h4>
                <hr>
                <div class="scrollable">
                    <?php foreach($endpoints as $key=>$val){?>
                        <div class="endpoint-groups">
                            <div class="endpoint-group">
                                <div class="endpoint-group-title"><?php echo strtoupper($key);?></div>
                                <?php foreach($val as $v){?>
                                    <div class="endpoint-item" data-method="<?php echo $v['method'];?>" data-url="<?php echo baseURL().ltrim($v['uri'],'/');?>">
                                        <span class="method">
                                            <?php echo $v['method'];?>
                                        </span> 
                                        <?php echo $v['uri'];?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                    
                    <?php foreach($endpoints as $key=>$val){?>
                        <div class="endpoint-groups">
                            <div class="endpoint-group">
                                <div class="endpoint-group-title"><?php echo strtoupper($key);?></div>
                                <?php foreach($val as $v){?>
                                    <div class="endpoint-item" data-method="<?php echo $v['method'];?>" data-url="<?php echo baseURL().ltrim($v['uri'],'/');?>">
                                        <span class="method">
                                            <?php echo $v['method'];?>
                                        </span> 
                                        <?php echo $v['uri'];?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                
            </div>

            <!-- Main Content -->
            <div class="col-md-9 p-3">
                <!-- URL Bar -->
                <div class="row mb-3">
                    <div class="col-auto">
                        <select id="method" class="form-select">
                            <option>GET</option>
                            <option>POST</option>
                            <option>PUT</option>
                            <option>DELETE</option>
                            <option>PATCH</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" id="url" class="form-control" placeholder="Enter request URL">
                    </div>
                    <div class="col-auto">
                        <button id="sendBtn" class="btn btn-primary">Send</button>
                    </div>
                </div>

                <!-- Request Tabs -->
                <ul class="nav nav-tabs mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#params">Params</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#headers">Headers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#body">Body</a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content mb-3">
                    <div class="tab-pane fade show active textarea-container" id="params">
                        <textarea id="paramsInput" class="form-control" placeholder="Enter query parameters as JSON">{}</textarea>
                    </div>
                    <div class="tab-pane fade textarea-container" id="headers">
                        <textarea id="headersInput" class="form-control" placeholder="Enter headers as JSON">{}</textarea>
                    </div>
                    <div class="tab-pane fade textarea-container" id="body">
                        <textarea id="bodyInput" class="form-control" placeholder="Enter request body"></textarea>
                    </div>
                </div>

                <!-- Response Section -->
                <div class="p-3 response-section rounded">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span id="status"></span>
                        <span id="contentType" class="text-muted"></span>
                        <span id="time" class="text-muted"></span>
                    </div>
                    <textarea id="responseOutput" class="form-control" readonly></textarea>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            const history = [];

            $('#sendBtn').click(async function() {
                try {
                    url = '<?php echo baseURL();?>postman/request';
                    const result = await $.ajax({
                        url: url,
                        method: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify({
                            method: $('#method').val(),
                            url: $('#url').val(),
                            params: JSON.parse($('#paramsInput').val() || '{}'),
                            headers: JSON.parse($('#headersInput').val() || '{}'),
                            body: $('#bodyInput').val()
                        })
                    });

                    const statusClass = result.status < 400 ? 'success' : 'danger';
                    $('#status').html(`<span class="badge bg-${statusClass}">Status: ${result.status}</span>`);
                    $('#contentType').text(result.contentType);
                    $('#time').text(`${result.duration}ms`);
                    $('#responseOutput').val(formatJSON(result.response));

                    

                } catch (error) {
                    $('#status').html('<span class="badge bg-danger">Error</span>');
                    $('#responseOutput').val(error.message);
                }
                autoResize(document.getElementById('responseOutput'));
            });

            function formatJSON(str) {
                try {
                    return JSON.stringify(JSON.parse(str), null, 2);
                } catch {
                    return str;
                }
            }

            

            function autoResize(textarea) {
                textarea.style.height = 'auto';
                textarea.style.height = textarea.scrollHeight + 'px';
            }

            $('#responseOutput').on('input change', function() {
                autoResize(this);
            });
            $('#paramsInput').on('input change', function() {
                autoResize(this);
            });
            $('#headersInput').on('input change', function() {
                autoResize(this);
            });
            $('#bodyInput').on('input change', function() {
                autoResize(this);
            });

            $(document).on('click', '.card-body, .endpoint-item', function() {
                $('#method').val($(this).data('method'));
                $('#url').val($(this).data('url'));
            });
        });
    </script>
</body>
</html>