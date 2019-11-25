<div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <p class="font-ash d-flex align-items-center w-100 font-weight-500 bold mb-0 pr-3">
                Reports
            </p>
        </div>
    </div>

    <div class="kt-portlet__body">
        <?php include ('include/reports/reports.export-button.php') ?>
        <table class="table table-striped font-ash assessment-table">
            <thead>
                <tr>
                    <th>User</th>
                    <th width="200">Total</th>
                    <th>Published</th>
                    <th width="100">Overdue</th>
                    <th>Sue in 30 Days</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Central Govenrment Test</td>
                    <td>11</td>
                    <td>89</td>
                    <td>8</td>
                    <td>8</td>
                </tr>

                <tr>
                    <td>Chepstow Lab</td>
                    <td>5</td>
                    <td>89</td>
                    <td>5</td>
                    <td>9</td>
                </tr>

                <tr>
                    <td>Facilities</td>
                    <td>2</td>
                    <td>2</td>
                    <td>10</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>Marko's Office</td>
                    <td>1</td>
                    <td>12</td>
                    <td>13</td>
                    <td>56</td>
                </tr>

                <tr>
                    <td>Test</td>
                    <td>5</td>
                    <td>78</td>
                    <td>4</td>
                    <td>6</td>
                </tr>

                <tr>
                    <td>Test Locaiton 1</td>
                    <td>131</td>
                    <td>2</td>
                    <td>67</td>
                    <td>23</td>
                </tr>

                <tr>
                    <td>King's Single Club</td>
                    <td>121</td>
                    <td>2</td>
                    <td>5</td>
                    <td>8</td>
                </tr>

                <tr>
                    <td>Central Govenrment Test</td>
                    <td>9</td>
                    <td>34</td>
                    <td>23</td>
                    <td>5</td>
                </tr>
            </tbody>
        </table>

        <?php include ('include/reports/reports.pagination.php') ?>
    </div>
</div>