<table border="0" cellpadding="0" cellspacing="0" class="blue-line" width="100%">
  <tbody>
    <tr>
      <td style="padding-top: 15px;" class="space-above-blue-line"></td>
    </tr>
    <tr>
      <td width="100%" style="background-color:#003399; height: 4px;" valign="top"></td>
    </tr>
  </tbody>
</table>
<table border="0" cellpadding="10" cellspacing="0" class="category-name" width="100%">
  <tbody>
    <tr>
      <td style="font-family: Oswald, Arial, sans-serif; font-weight: normal; font-size: 20px; padding-left: 0px; padding-right: 0px;">
        <?php
          if (isset($name_field[$language])) {
            print($name_field[$language][0]['safe_value']);
            } else {
              print($name_field[0]['safe_value']);
          }
        ?>
      </td>
    </tr>
    <tr>
      <td style="border-style: dotted; border-top-width: 2px; border-bottom-width: 0px; border-left-width: 0px; border-right-width: 0px; border-color: #CFDDEE; padding-top: 0px; padding-bottom: 0px; height: 0px;" class="dotted-line no-padding"></td>
    </tr>
    <tr>
      <td style="padding-top: 0px; padding-bottom: 10px;" class="space-beyond-dotted-line"></td>
    </tr>
  </tbody>
</table>