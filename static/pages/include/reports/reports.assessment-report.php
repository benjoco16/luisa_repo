<div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <p class="font-ash d-flex align-items-center w-100 font-weight-500 bold mb-0 pr-3">
                Assessment Report By User <i class="fa fa-question-circle font-gray ml-2" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Sevron Information Here"></i>
            </p>
        </div>
    </div>

    <div class="kt-portlet__body">
        <?php include ('include/reports/reports.export-button.php') ?>
        <table class="table table-striped font-ash assessment-table">
            <thead>
                <tr>
                    <th>Location</th>
                    <th width="200">Total</th>
                    <th>Published</th>
                    <th width="100">Overdue</th>
                    <th>Sue in 30 Days</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#">Beth-Louise Coram</a></td>
                    <td>11</td>
                    <td>89</td>
                    <td>8</td>
                    <td>8</td>
                </tr>

                <tr>
                    <td><a href="#">Danny Greaves</a></td>
                    <td>5</td>
                    <td>89</td>
                    <td>5</td>
                    <td>9</td>
                </tr>

                <tr>
                    <td><a href="#">James Foley</a></td>
                    <td>2</td>
                    <td>2</td>
                    <td>10</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td><a href="#">Richard Pasuquin</a></td>
                    <td>1</td>
                    <td>12</td>
                    <td>13</td>
                    <td>56</td>
                </tr>

                <tr>
                    <td><a href="#">Ryan Malaney</a></td>
                    <td>5</td>
                    <td>78</td>
                    <td>4</td>
                    <td>6</td>
                </tr>

                <tr>
                    <td><a href="#">Glenn Eastham</a></td>
                    <td>131</td>
                    <td>2</td>
                    <td>67</td>
                    <td>23</td>
                </tr>

                <tr>
                    <td><a href="#">King's Single Club</a></td>
                    <td>121</td>
                    <td>2</td>
                    <td>5</td>
                    <td>8</td>
                </tr>

                <tr>
                    <td><a href="#">Chloe Fowell</a></td>
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